<?php
// database/migrations/xxxx_xx_xx_create_document_uploads_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentUploadsTable extends Migration
{
    public function up(): void
    {
        Schema::create('document_uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('passport')->nullable();
            $table->string('vaccination_certificate')->nullable();
            $table->string('recent_passport_photo')->nullable();
            $table->timestamps();

            // Add foreign key constraint if needed
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('document_uploads');
    }
}
