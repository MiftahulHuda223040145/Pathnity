<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public function blogs(): HasMany {
        return $this->hasMany(Blog::class);
    }
    
    public function vacancies(): HasMany {
        return $this->hasMany(Vacancies::class);
    }
}

