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
        Schema::create('biopsy_sample_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biopsy_sample_type_group_id');

            $table->timestamps();

            $table->foreign('biopsy_sample_type_group_id')->references('id')->on('biopsy_sample_type_groups')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biopsy_sample_types');
    }
};
