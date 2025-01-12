<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'types_id', 'salary', 'numberofworker', 'description'];
    
    public function category(): BelongsTo
    { 
        return $this->belongsTo(Category::class);
    }

    public function type(): BelongsTo
    { 
        return $this->belongsTo(Type::class);
    }
}
