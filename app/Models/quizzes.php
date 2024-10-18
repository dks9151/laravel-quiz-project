<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizzes extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_option',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestQuiz = self::latest('id')->first();
            $nextId = $latestQuiz ? $latestQuiz->id + 1 : 1;
            $model->question_id = str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
