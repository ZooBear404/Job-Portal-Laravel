<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employment_type extends Model
{
    /** @use HasFactory<\Database\Factories\EmploymentTypeFactory> */
    use HasFactory;

    protected $table = "employment_types";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'employment_type_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
    ];
}
