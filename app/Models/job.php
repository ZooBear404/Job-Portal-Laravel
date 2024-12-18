<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $table = "jobs";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_id';
    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'job_summary',
        'duties',
        'requirements',
        'submission_guidelines',
        'functional_area',
        'closing_date',
        'number_of_vacancies',
        'salary_min',
        'salary_max',
        'years_of_experience',
        'probation_period',
        'contract_type',
        'contract_duration',
        'is_contract_extensible',
        'minimum_education',
        'gender',
        'employment_type',
    ];

    protected $hidden = [
        'company',
    ];

    protected $casts = [
        'is_contract_extensible' => 'boolean',
        'gender' => 'string',
        'closing_date' => 'date'
    ];

    protected $attributes = [
        'number_of_vacancies' => 1,
        'salary_min' => -1,
    ];

    public function company() {
        return $this->belongsTo(company::class, 'company_id');
    }

    public function minimum_education() {
        return $this->belongsTo(education_level::class, 'education_level_id');
    }

    public function employment_type() {
        return $this->belongsTo(employment_type::class, 'employment_type_id');
    }

    public function contract_type() {
        return $this->belongsTo(contract_type::class, 'contract_type_id');
    }
}
