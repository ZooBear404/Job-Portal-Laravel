<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    /** @use HasFactory<\Database\Factories\StateFactory> */
    use HasFactory;

    protected $table = "states";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'state_id';
    public $incrementhing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'country',
        'name',
    ];

    public function country() {
        return $this->belongsTo(country::class, 'country');
    }
}
