<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_experience extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerExperienceFactory> */
    use HasFactory;

    protected $table = "job_seeker_experience";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_experience_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'job_title',
        'employment_type',
        'company',
        'description',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'job_seeker'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function employment_type() {
        return $this->belongsTo(employment_type::class, 'employment_type');
    }

    public function company() {
        return $this->belongsTo(company::class, 'company');
    }

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }
}
