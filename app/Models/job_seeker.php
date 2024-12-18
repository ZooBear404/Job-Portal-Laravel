<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerFactory> */
    use HasFactory;

    protected $table = "job_seekers";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_id';
    public $incrementhing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'date_of_birth',
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'email' => 'email',
        'date_of_birth' => 'date',
        'password' => 'password',
    ];
}
