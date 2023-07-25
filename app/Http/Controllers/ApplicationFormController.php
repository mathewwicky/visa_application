<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationFormController extends Controller
{
    public function application()
    {
        return view("app.application");
    }

     
    public function submit(Request $request)
{
    // Validate the request data for the visa and category
    $request->validate([
        'Visa' => 'required',
        'Category' => 'required',
    ]);

    // Save the visa and category data to the session
    $request->session()->put('visa', $request->input('Visa'));
    $request->session()->put('category', $request->input('Category'));

    // Redirect to the personal data screen
    return redirect()->route('personal-data-form');
}

    public function personalDataForm()
    {
        return view("app.personal_data");
    }


public function submitPersonalData(Request $request)
{
    // Validate the request data for the personal data form
    $request->validate([
        'Given_name' => 'nullable|string|max:255',
        'SurName' => 'nullable|string|max:255',
        'DateOfBirth' => 'nullable|date',
        'Gender' => 'nullable|string|max:10',
        'MartialStatus' => 'nullable|string|max:20',
        'PhoneNumber' => 'nullable|string|max:20',
        'Email' => 'nullable|email|max:255',
        'ConfirmEmail' => 'nullable|email|max:255|same:Email',
        'CountryOfResidence' => 'nullable|string|max:255',
        'CurrentResidenceAddress' => 'nullable|string|max:255',
    ]);

    // Create a new application record
    $application = new Application();

    // Retrieve the visa and category data from the session and assign them to the application
    $application->Visa = $request->session()->get('visa');
    $application->Category = $request->session()->get('category');

    // Assign the personal data to the application
    $application->Given_name = $request->input('Given_name');
    $application->SurName = $request->input('SurName');
    $application->DateOfBirth = $request->input('DateOfBirth');
    $application->Gender = $request->input('Gender');
    $application->MartialStatus = $request->input('MartialStatus');
    $application->PhoneNumber = $request->input('PhoneNumber');
    $application->Email = $request->input('Email');
    $application->ConfirmEmail = $request->input('ConfirmEmail');
    $application->CountryOfResidence = $request->input('CountryOfResidence');
    $application->CurrentResidenceAddress = $request->input('CurrentResidenceAddress');

    // Save the complete application data to the database
    $application->save();

    // // Redirect to the success page or any other page as per your application flow
    // return redirect()->route('success')->with('success', 'Application submitted successfully.');

    // Redirect to Step 3 (Passport Data) page
    return redirect()->route('passport-application')->with('success', 'Personal Data submitted successfully.');
}

}
