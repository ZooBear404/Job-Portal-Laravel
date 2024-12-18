<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    /** @use HasFactory<\Database\Factories\InstituteFactory> */
    use HasFactory;

        //
    protected $table = "institutes";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'institute_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
    ];
}
