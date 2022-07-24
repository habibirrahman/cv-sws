<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'location',
        'date',
    ];
    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
}
