<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job_seeker_login_session extends Model
{
    protected $table = "job_seeker_login_sessions";
    protected $primaryKey = "job_seeker_login_sessions_id";

    protected $fillable = [

    ];

    protected $hidden = [
        'session_token',
        'session_expiration',
        'is_active',
        'job_seeker',
    ];

    protected $casts = [
        'session_expiration' => 'dateTime',
        'is_active' => 'boolean',
    ];

    public function job_seeker() {
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }

}
