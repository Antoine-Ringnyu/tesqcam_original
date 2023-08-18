<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Question;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the categories with related departments and courses
        $categories = Category::with(['departments.courses'])->get();

        // Fetch questions and related details
        $questions = Question::with(['department', 'course', 'answers'])->get();

        return view('home', compact('categories', 'questions'));
    }

}
