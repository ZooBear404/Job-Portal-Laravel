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
        Schema::create('company_login_sessions', function (Blueprint $table) {
            $table->id('company_login_sessions_id');
            $table->foreignId('company')->constrained('company', 'company_id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('session_token', 1000);
            $table->dateTime('session_expiration');
            $table->boolean('is_active')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_login_sessions');
    }
};
