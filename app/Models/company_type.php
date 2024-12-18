<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_type extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyTypeFactory> */
    use HasFactory;

    protected $table = "company_types";


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'company_type_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name'
    ];
}
