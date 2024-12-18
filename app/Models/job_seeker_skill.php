<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_skill extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerSkillFactory> */
    use HasFactory;

    protected $table = "job_seeker_skills";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_skill_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'job_seeker'
    ];

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }
}
