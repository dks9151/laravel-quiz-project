<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quizzes;

class QuizController extends Controller
{
    public function create()
    {
        $latestQuiz = quizzes::latest('id')->first();
        $nextId = $latestQuiz ? $latestQuiz->id + 1 : 1;
        $formattedId = str_pad($nextId, 3, '0', STR_PAD_LEFT);
    
        return view('admin.insert-question', compact('formattedId'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_option' => 'required|string',
        ]);

        quizzes::create($request->all());

        return redirect()->route('admin.insert-question')->with('success', 'Question inserted successfully!');
    }
}
