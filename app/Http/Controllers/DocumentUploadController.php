<?php
// app\Http\Controllers\DocumentUploadController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentUploadController extends Controller
{
    public function documentUploadForm()
    {
        return view("app.document_upload");
    }

    public function submitDocumentUpload(Request $request)
    {
        $request->validate([
            'passport' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'vaccination_certificate' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'passport_photo' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $document = new Document();

        // Save the uploaded files to the storage and get their paths
        $document->passport = $request->file('passport')->store('documents');
        $document->vaccination_certificate = $request->file('vaccination_certificate')->store('documents');
        $document->passport_photo = $request->file('passport_photo')->store('documents');

        // Save the Document model to the database
        $document->save();

        // Redirect to a success page or any other page as per your application flow
        return redirect()->route('')->with('success', 'Documents uploaded successfully.');
    }
}
