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
        Schema::create('biopsy_sample_processments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biopsy_sample_id')->nullable();  // Nullable to allow 'set null'
            $table->mediumText('description')->nullable();
            $table->boolean('description_verified')->default(false);
            $table->mediumText('observations')->nullable();

            $table->timestamps();
 
            // Foreign keys with 'set null' on delete
            $table->foreign('biopsy_sample_id')->references('id')->on('biopsy_samples')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biopsy_sample_processments');
    }
};
