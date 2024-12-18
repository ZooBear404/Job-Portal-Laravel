<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    protected $table = "countries";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'country_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name'
    ];
}
