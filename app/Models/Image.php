<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'url',
        'identifier',
        'project_id',
        'certificate_id',
    ];
    public function certificate()
    {
        return $this->belongsTo('App\Models\Certificate');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
