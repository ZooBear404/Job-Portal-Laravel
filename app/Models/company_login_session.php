<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company_login_session extends Model
{
    protected $table = "company_login_sessions";
    protected $primaryKey = "company_login_sessions_id";

    protected $fillable = [

    ];

    protected $hidden = [
        'session_token',
        'session_expiration',
        'is_active',
        'company',
    ];

    protected $casts = [
        'session_expiration' => 'dateTime',
        'is_active' => 'boolean',
    ];

    public function company() {
        return $this->belongsTo(company::class, 'company');
    }

}
