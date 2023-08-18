<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'department'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }
}
