<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;

    protected $table = "skills";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'skill_id';
    public $incrementhing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'value',
    ];
}
