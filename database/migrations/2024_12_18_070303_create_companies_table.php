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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->string('name', 200)->unique();
            $table->foreignId('company_type')->constrained('company_types', 'company_type_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('industry_type')->constrained('industry_types', 'industry_type_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('country')->constrained('countries', 'country_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('state')->constrained('states', 'state_id')->onDelete('cascade')->onUpdate('cascade');
            $table->year('founded_year');
            $table->string('address', 255);
            $table->string('website', 255);
            $table->text('description');
            $table->string('password', 255);
            $table->timestamps();
        });

        Schema::create('companies_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('companies_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
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
        Schema::dropIfExists('companies');
        Schema::dropIfExists('companies_password_reset_tokens');
        Schema::dropIfExists('companies_sessions');
    }
};
