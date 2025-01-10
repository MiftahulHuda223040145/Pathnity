<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type','category_id', 'description','image'];


public function category(){
    return $this->belongsTo(Category::class);
}

}
