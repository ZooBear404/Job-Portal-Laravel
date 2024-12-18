<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_certificate extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerCertificateFactory> */
    use HasFactory;

    protected $table = "job_seeker_certificates";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_certificate_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'institute',
        'issue_date',
        'description',
    ];

    protected $hidden = [
        'job_seeker',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'description' => 'text'
    ];

    public function institute() {
        return $this->belongsTo(institute::class, 'institute');
    }

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }

}
