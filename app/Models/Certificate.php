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
        'class_of_city',
        'certificate_of_domicile',
        'published_by',
        'registration_number',
        'tax_number',
        'tax_letter',
        'business_license',
    ];
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function getDateFormattedAttribute()
    {
        $value = $this->date;
        $months = [
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];
        if ($value) {
            $part = explode('-', $value);
            return $part[2] . ' ' . $months[(int)$part[1]] . ' ' . $part[0];
        } else return null;
    }
}
