<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_application extends Model
{
    /** @use HasFactory<\Database\Factories\JobApplicationFactory> */
    use HasFactory;

    protected $table = "job_applications";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_application_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
    ];

    protected $hidden = [
        'job',
        'job_seeker',
    ];

    public function job() {
        return $this->belongsTo(job::class, 'job');
    }

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }
}
