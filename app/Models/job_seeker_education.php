<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_education extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerEducationFactory> */
    use HasFactory;

    protected $table = "job_seeker_educations";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_education_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'institute',
        'education_level',
        'state',
        'start_date',
    ];

    protected $casts = [
        'start_date' => 'date'
    ];

    public function institute() {
        return $this->belongsTo(institute::class, 'institute');
    }

    public function education_level(){
        return $this->belongsTo(education_level::class, 'education_level');
    }

    public function state(){
        return $this->belongsTo(state::class, 'state');
    }
}
