<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OtherData;

class OtherDataController extends Controller
{
    public function otherDataForm()
    {
        return view("app.other_data");
    }

    public function submitOtherData(Request $request)
    {
        // Validate the request data for the Other Data form
        $request->validate([
            'hostaddress' => 'required|string|max:255',
            'travelhistory' => 'required|string|max:255',
            'purposeofvisit' => 'required|string|max:255',
            'dateofarrival' => 'required|date',
            'visapersonalized' => 'required|string|max:255',
            'durationofstay' => 'required|string|max:255',
            'specifyperiod' => 'required|string|max:255',
        ]);

        // Create a new OtherData record
        $otherData = new OtherData();

        // Retrieve any data you need from previous steps and assign them to the OtherData model
        // For example, you can retrieve the visa and category data from the session and assign them here.
        // You can use $request->session()->get('visa') and $request->session()->get('category')

        // Assign the data from the Other Data form to the OtherData model
        $otherData->hostaddress = $request->input('hostaddress');
        $otherData->travelhistory = $request->input('travelhistory');
        $otherData->purposeofvisit = $request->input('purposeofvisit');
        $otherData->dateofarrival = $request->input('dateofarrival');
        $otherData->visapersonalized = $request->input('visapersonalized');
        $otherData->durationofstay = $request->input('durationofstay');
        $otherData->specifyperiod = $request->input('specifyperiod');

        // Save the OtherData record to the database
        $otherData->save();

        // Redirect to a success page or any other page as per your application flow
        // For example, you can redirect to the dashboard or a confirmation page
        return redirect()->route('step5-data')->with('success', 'Application submitted successfully.');
    }
}
