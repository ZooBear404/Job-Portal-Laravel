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
        Schema::create('job_seeker_educations', function (Blueprint $table) {
            $table->id('job_seeker_education_id');
            $table->foreignId('job_seeker')->constrained('job_seekers', 'job_seeker_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('institute')->constrained('institutes', 'institute_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_level')->constrained('education_levels', 'education_level_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('state')->constrained('states', 'state_id')->onDelete('cascade')->onUpdate('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_educations');
    }
};