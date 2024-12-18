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
        Schema::create('job_seeker_experiences', function (Blueprint $table) {
            $table->id('job_seeker_experiences_id');
            $table->foreignId('job_seeker')->constrained('job_seekers', 'job_seeker_id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title', 255);
            $table->foreignId('employment_type')->constrained('employment_types', 'employment_type_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('company')->constrained('companies', 'company_id')->onDelete('cascade')->onUpdate('cascade');
            $table->date('start_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_experiences');
    }
};
