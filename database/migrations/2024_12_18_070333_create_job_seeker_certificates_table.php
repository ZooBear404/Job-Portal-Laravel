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
        Schema::create('job_seeker_certificates', function (Blueprint $table) {
            $table->id('job_seeker_certificate_id');
            $table->string('title', 50);
            $table->foreignId('institute')->constrained('institutes', 'institute_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('job_seeker')->constrained('job_seekers')->onDelete('cascade')->onUpdate('cascade');
            $table->date('issue_date');
            $table->string('description', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_certificates');
    }
};
