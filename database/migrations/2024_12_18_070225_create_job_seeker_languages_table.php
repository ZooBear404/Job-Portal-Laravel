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
        Schema::create('job_seeker_languages', function (Blueprint $table) {
            $table->id('job_seeker_language_id');
            $table->foreignId('job_seeker')->constrained('job_seekers', 'job_seeker_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('language')->constrained('languages', 'language_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('language_fluency')->constrained('language_fluencies', 'language_fluency_id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_languages');
    }
};
