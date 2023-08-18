<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'department_id', 'course_id', 'question', 'year'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function answers():HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function files():HasMany
    {
        return $this->hasMany(File::class);
    }
}
