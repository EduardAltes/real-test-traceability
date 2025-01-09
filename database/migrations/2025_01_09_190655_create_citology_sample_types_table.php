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
        Schema::create('citology_sample_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citology_sample_type_group_id');

            $table->timestamps();

            $table->foreign('citology_sample_type_group_id')->references('id')->on('citology_sample_type_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citology_sample_types');
    }
};
