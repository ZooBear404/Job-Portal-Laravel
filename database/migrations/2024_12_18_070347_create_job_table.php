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
        Schema::create('job', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('name', 100);
            $table->text('summary');
            $table->text('duties');
            $table->text('requirments');
            $table->text('submission_guidelines');
            $table->string('functional_area');
            $table->date('close_date');
            $table->integer('number_of_vacancies');
            $table->integer('salary_min')->default('0')->min('0');
            $table->integer('salary_max')->min('0');
            $table->integer('years_of_experience')->min('0');
            $table->integer('probation_period')->min('0');
            $table->string('gender');
            $table->integer('constract_duration')->min('0');
            $table->string('is_contract_extensible');
            $table->foreignId('contract_type')->constrained('contract_types', 'contract_type_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('minimum_education')->constrained('education_levels', 'education_level_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('employment_type')->constrained('employment_types', 'employment_type_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('company')->constrained('companies', 'company_id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
