<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citology_samples', function (Blueprint $table) {
            $table->id();
            $table->string('qr')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->unsignedSmallInteger('age');
            $table->mediumText('request');
            $table->text('applicant');
            $table->boolean('reception_verified');
            $table->unsignedBigInteger('lab_id')->nullable();  // Nullable to allow 'set null'
            $table->unsignedBigInteger('citology_sample_type_id')->nullable();  // Nullable to allow 'set null'

            $table->timestamps();

            // Foreign keys with 'set null' on delete
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('set null');
            $table->foreign('citology_sample_type_id')->references('id')->on('citology_sample_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citology_samples');
    }
};
