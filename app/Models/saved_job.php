<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saved_job extends Model
{
    /** @use HasFactory<\Database\Factories\SavedJobFactory> */
    use HasFactory;

    protected $table = "saved_jobs";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'saved_job_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [

    ];

    protected $hidden = [
        'job_seeker',
        'job'
    ];

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }

    public function job() {
        return $this->belongsTo(job::class, 'job');
    }
}
