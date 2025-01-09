<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vancavies extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'type', 'salary', 'numberofworker', 'description'];
    
    public function category(): BelongsTo
    { 
        return $this->belongsTo(Category::class);
    }

    public function type(): BelongsTo
    { 
        return $this->belongsTo(Type::class);
    }
}
