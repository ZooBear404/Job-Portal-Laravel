<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education_level extends Model
{
    /** @use HasFactory<\Database\Factories\EducationLevelFactory> */
    use HasFactory;

    protected $table = "education_levels";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'education_level_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'rank_value'
    ];

    protected $casts = [
        'rank_value' => 'int'
    ];
}
