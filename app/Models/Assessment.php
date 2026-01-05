<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'description',
        'questions',
    ];

    protected $casts = [
        'questions' => 'array',
    ];

    public function results(): HasMany
    {
        return $this->hasMany(AssessmentResult::class);
    }
}
