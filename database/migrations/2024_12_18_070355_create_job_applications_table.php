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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id('job_application_id');
            $table->foreignId('job')->constrained('job', 'job_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('job_seeker')->constrained('job_seekers', 'job_seeker_id')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('is_reviewed', ['T', 'F']);
            $table->enum('is_accepted', ['T', 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
