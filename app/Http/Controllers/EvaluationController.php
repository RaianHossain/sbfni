<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function show($student_id, $year)
    {
        $courses = Course::all();
        $coursesTaken = CourseRegistration::where('student_id', $student_id)->where('year', $year)->get();
        return view('backend.evaluation.show', compact('courses', 'coursesTaken', 'student_id', 'year'));
    }

    public function create($student_id, $year)
    {
        return view('backend.evaluation.create', compact('student_id', 'year'));
    }
}
