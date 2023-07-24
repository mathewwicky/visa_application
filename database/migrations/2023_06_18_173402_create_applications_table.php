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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('Visa')->nullable();
            $table->string('Category')->nullable();
            $table->string('Given_name')->nullable();
            $table->string('SurName')->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->string('Gender')->nullable();
            $table->string('MartialStatus')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Email')->nullable();
            $table->string('ConfirmEmail')->nullable();
            $table->string('CountryOfResidence')->nullable();
            $table->string('CurrentResidenceAddress')->nullable();
            
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
