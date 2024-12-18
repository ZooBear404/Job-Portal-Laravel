<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_language extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerLanguageFactory> */
    use HasFactory;

    protected $table = "job_seeker_languages";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_language_id';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
    ];

    protected $hidden = [
        'job_seeker',
        'language',
        'language_fluency'
    ];

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }

    public function language(){
        return $this->belongsTo(language::class, 'language');
    }

    public function language_fluency() {
        return $this->belongsTo(language_fluency::class, 'language_fluency');
    }
}
