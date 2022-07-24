<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $fillable = [
        'title',
        'notary',
        'number',
        'date',
        'city',
        'certificate_of_domicile',
        'published_by',
        'registration_number',
        'tax_number',
        'tax_letter',
        'business_license',
    ];
    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
}
