<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language_fluency extends Model
{
    /** @use HasFactory<\Database\Factories\LanguageFluencyFactory> */
    use HasFactory;

    protected $table = "language_fluencies";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'language_fluency_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'value',
    ];

    protected $casts = [
        'value' => 'int',
    ];
}
