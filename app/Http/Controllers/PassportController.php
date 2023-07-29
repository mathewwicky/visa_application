<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PassportData; // Make sure to import the PassportData model

class PassportController extends Controller
{
    public function application()
    {
        return view('app.passport');
    }

    public function submit(Request $request)
    {
        // Validate the form data for the passport application
        $request->validate([
            'passporttype' => 'required|string',
            'passportnumber' => 'required|string',
            'issueingcountry' => 'required|string',
            'placeofissue' => 'required|string',
            'dateofissue' => 'required|date',
            'dateofexpire' => 'required|date|after:dateofissue',
            'previouspassportnumber' => 'nullable|string',
            'countryofresidence' => 'required|string',
            'cityofresidence' => 'required|string',
            'residentialaddress' => 'required|string',
        ]);

        // Create a new passport application record
        $passportData = new PassportData();
        $passportData->passporttype = $request->input('passporttype');
        $passportData->passportnumber = $request->input('passportnumber');
        $passportData->issueingcountry = $request->input('issueingcountry');
        $passportData->placeofissue = $request->input('placeofissue');
        $passportData->dateofissue = $request->input('dateofissue');
        $passportData->dateofexpire = $request->input('dateofexpire');
        $passportData->previouspassportnumber = $request->input('previouspassportnumber');
        $passportData->countryofresidence = $request->input('countryofresidence');
        $passportData->cityofresidence = $request->input('cityofresidence');
        $passportData->residentialaddress = $request->input('residentialaddress');
        $passportData->save();

        // Redirect to Step 3 (Passport Application) after successful submission
        return redirect()->route('other-data-form')->with('success', 'Passport Application submitted successfully.');
    }
}
