<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $fillable = [
        'name',
        'avaibility',
        'location',
        'cost_per_unit',
    ];

    // belongsToMany relationship with the Project model
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
