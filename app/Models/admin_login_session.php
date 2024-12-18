<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_login_session extends Model
{
    protected $table = "admin_login_sessions";
    protected $primaryKey = "admin_login_sessions_id";

    protected $fillable = [

    ];

    protected $hidden = [
        'session_token',
        'session_expiration',
        'is_active',
        'admin',
    ];

    protected $casts = [
        'session_expiration' => 'dateTime',
        'is_active' => 'boolean',
    ];

    public function admin() {
        return $this->belongsTo(admin::class, 'admin');
    }

}
