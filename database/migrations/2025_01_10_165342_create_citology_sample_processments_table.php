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
        Schema::create('citology_sample_processments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citology_sample_id');
            $table->mediumText('description')->nullable();
            $table->boolean('description_verified')->default(false);
            $table->unsignedBigInteger('citology_procedure_id');
            $table->boolean('procedure_verified')->default(false);
            $table->unsignedBigInteger('tinction_id');
            $table->boolean('tinction_verified')->default(false);
            $table->boolean('isMounted')->default(false);
            $table->boolean('isDelivered')->default(false);
            $table->boolean('isDiagnosed')->default(false);
            $table->boolean('isArchived')->default(false);
            $table->mediumText('observations')->nullable();

            $table->timestamps();

            $table->foreign('sample_id')->references('id')->on('citology_samples')->onDelete('cascade');
            $table->foreign('procedure_id')->references('id')->on('citology_procedures')->onDelete('cascade');
            $table->foreign('tinction_id')->references('id')->on('tinctions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citology_sample_processments');
    }
};
