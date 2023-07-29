<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step5Data;

class Step5DataController extends Controller
{
    public function index()
    {
        return view('app.step5_data');
    }
//Last screen of the application
    public function alert_message(Request $request)
    {
        return view('app.alert_message');

    }

    public function submitStep5Data(Request $request)
    {
        $request->validate([
            'denied_visa' => 'required|boolean',
            'deported_before' => 'required|boolean',
            'convicted_in_any_country' => 'required|boolean',
            'criminal_proceedings' => 'required|boolean',
            'mental_illness' => 'required|boolean',
            'information_accuracy' => 'required|boolean',
        ]);

        $step5Data = new Step5Data();
        $step5Data->denied_visa = $request->input('denied_visa');
        $step5Data->deported_before = $request->input('deported_before');
        $step5Data->convicted_in_any_country = $request->input('convicted_in_any_country');
        $step5Data->criminal_proceedings = $request->input('criminal_proceedings');
        $step5Data->mental_illness = $request->input('mental_illness');
        $step5Data->information_accuracy = $request->input('information_accuracy');
        $step5Data->save();

        // Redirect to the next step or success page
        return redirect()->route('document-upload-form')->with('success', 'Step 5 data submitted successfully.');
    }
}
