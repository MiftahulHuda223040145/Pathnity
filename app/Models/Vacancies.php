<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'types_id', 'salary', 'numberofworker', 'description', 'status', 'organizer_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'types_id');
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class, 'vacancy_id');
    }
}
