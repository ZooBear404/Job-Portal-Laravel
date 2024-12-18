<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract_type extends Model
{
    /** @use HasFactory<\Database\Factories\ContractTypeFactory> */
    use HasFactory;

    protected $table = "contract_types";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'contract_type_id';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
    ];

}

