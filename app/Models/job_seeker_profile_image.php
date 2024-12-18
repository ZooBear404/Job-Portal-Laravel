<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_seeker_profile_image extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerProfileImageFactory> */
    use HasFactory;

    protected $table = "job_seeker_profile_images";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'job_seeker_profile_image_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'image_path'
    ];

    protected $hidden = [
        'job_seeker'
    ];

    protected $casts = [
        'image_path' => 'image'
    ];

    public function job_seeker(){
        return $this->belongsTo(job_seeker::class, 'job_seeker');
    }
}
