<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industry_type extends Model
{
    /** @use HasFactory<\Database\Factories\IndustryTypeFactory> */
    use HasFactory;

    protected $table = "industry_types";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'industry_type_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
    ];
}
