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
        Schema::create('biopsy_sample_processment_blocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biopsy_sample_processment_id')->nullable();
            $table->unsignedSmallInteger('cuts')->default(0);
            $table->boolean('cuts_verified')->default(false);
            $table->unsignedBigInteger('tinction_id');
            $table->boolean('tinction_verified')->default(false);
            $table->mediumText('observations')->nullable();

            $table->timestamps();

            $table->foreign('biopsy_sample_processment_id')->references('id')->on('biopsy_sample_processments')->onDelete('cascade');
            $table->foreign('tinction_id')->references('id')->on('tinctions')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biopsy_sample_processment_blocks');
    }
};
