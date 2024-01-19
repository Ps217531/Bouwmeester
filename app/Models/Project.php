<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'project_name',
        'location',
        'start_date',
        'end_date',
        'project_manager',
        'status',
    ];

    // belongsToMany relationship with the Material model
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
