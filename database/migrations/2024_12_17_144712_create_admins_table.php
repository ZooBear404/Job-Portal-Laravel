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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('name', 30)->unique();
            $table->string('password', 255);
            $table->rememberToken();
            $table->boolean('isActive')->default('true');
            $table->timestamps();
        });


        Schema::create('adminss_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('admins_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->constrained('admins', 'admin_id')->nullable()->index();
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
        Schema::dropIfExists('admins');
        Schema::dropIfExists('admins_password_reset_tokens');
        Schema::dropIfExists('admins_sessions');
    }
};
