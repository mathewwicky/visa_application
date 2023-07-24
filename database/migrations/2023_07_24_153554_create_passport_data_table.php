<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passport_data', function (Blueprint $table) {
            $table->id();
            $table->string('passporttype'); // Passport Type
            $table->string('passportnumber'); // Passport Number
            $table->string('issueingcountry'); // Issuing Country
            $table->string('placeofissue'); // Place of Issue
            $table->date('dateofissue'); // Date of Issue
            $table->date('dateofexpire'); // Date of Expiry
            $table->string('previouspassportnumber')->nullable(); // Previous Passport Number (Nullable)
            $table->string('countryofresidence'); // Country of Residence
            $table->string('cityofresidence'); // City of Residence
            $table->string('residentialaddress'); // Residential Address
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passport_data');
    }
};
