<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_logo extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyLogoFactory> */
    use HasFactory;

    protected $table = "company_logos";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'company_logo_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'cover_image_path',
    ];

    protected $casts = [
        'cover_image_path' => 'image',
    ];

    protected $attributes = [
        'cover_image_path' => 'default'
    ];

    public function company() {
        return $this->belongsTo(company::class, 'company_id');
    }

}
