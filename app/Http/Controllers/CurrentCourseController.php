<?php

namespace App\Http\Controllers;

use App\Models\CurrentCourse;
use Illuminate\Http\Request;

class CurrentCourseController extends Controller
{
    public function index()
    {
        $currentcourses = CurrentCourse::where('year', date('Y'))->get();
        return view('backend.currentcourses.index', compact('currentcourses'));
    }
}
