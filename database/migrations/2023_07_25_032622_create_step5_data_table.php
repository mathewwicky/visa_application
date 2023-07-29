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
        Schema::create('step5_data', function (Blueprint $table) {
            $table->id();
            $table->boolean('denied_visa')->nullable();
            $table->boolean('deported_before')->nullable();
            $table->boolean('convicted_in_any_country')->nullable();
            $table->boolean('criminal_proceedings')->nullable();
            $table->boolean('mental_illness')->nullable();
            $table->boolean('information_accuracy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('step5_data');
    }
};
