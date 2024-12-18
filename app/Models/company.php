<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $table = "companies";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'company_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'company_type',
        'industry_type',
        'country',
        'state',
        'founded_year',
        'website',
        'address',
        'description',
        'password',
    ];

    protected $casts = [
        'founded_year' => 'year',
        'website' => 'url',
        'password' => 'password',
        'description' => 'text'
    ];

    public function company_type() {
        return $this->belongsTo(company_type::class, 'company_type_id');
    }

    public function industry_type() {
        return $this->belongsTo(industry_type::class, 'industry_type_id');
    }

    public function country() {
        return $this->belongsTo(country::class, 'country_id');
    }

    public function state() {
        return $this->belongsTo(state::class, 'state_id');
    }
}
