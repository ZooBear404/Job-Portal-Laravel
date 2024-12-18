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
        Schema::create('job_seeker_profile_images', function (Blueprint $table) {
            $table->id('job_seeker_profile_image_id');
            $table->foreignId('job_seeker')->constrained('job_seekers', 'job_seeker_id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_profile_images');
    }
};
