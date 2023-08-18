<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Question;


use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $categoriesWithDepartmentsAndCourses = Category::with('departments.courses')->get();
    
        return view('programs.index', compact('categoriesWithDepartmentsAndCourses'));
    }
}
