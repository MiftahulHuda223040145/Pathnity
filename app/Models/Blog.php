<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    // use HasFactory,Sluggable;
    protected $fillable = ['title', 'author', 'slug', 'image', 'category_id', 'description'];

    protected $with = ['category'];

    public function category(): BelongsTo
    { 
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName() {
        return 'id';
    }


    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
