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
        // Validate the request data
        $request->validate([
            'Visa' => 'required',
            'Category' => 'required',
        ]);

        // Save the data to the database
        $application = new Application();
        $application->Visa = $request->input('Visa');
        $application->Category = $request->input('Category');
        $application->save();

        // Redirect the user to the success page
        return redirect()->route('success');
    }
}
