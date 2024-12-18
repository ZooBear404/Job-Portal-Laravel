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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id('job_seeker_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 320)->unique();
            $table->enum('gender', array('E', 'F', 'M'));
            $table->date('date_of_birth');
            $table->string('password', 255);
            $table->timestamps();
        });

        Schema::create('job_seekers_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('job_seekers_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->constrained('job_seekers', 'job_seeker_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
        Schema::dropIfExists('job_seekers_password_reset_tokens');
        Schema::dropIfExists('job_seekers_sessions');
    }
};
