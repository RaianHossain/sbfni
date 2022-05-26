<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    public function create()
    {
        $currentcourseslist = CurrentCourse::where('year', date('Y'))->get();
        // dd($currentcourseslist);
        
        $courses = CourseRegistration::where('student_id', auth()->user()->id)->where('year', date('Y'))->where('course_year', 1)->get();
        // dd($courses);
        return view('backend.courseregistrations.create', ['currentcourseslist' => $currentcourseslist, 'courses' => $courses]);
    }

    public function index()
    {
        return view('backend.courseregistrations.index');
    }

    public function store($course_id, $student_id, $year, $course_year)
    {
        // return response()->json([$course_id, $student_id, $year, $course_year]);
        CourseRegistration::create([
            'student_id' => $student_id,
            'currentcourse_id' => $course_id,
            'year' => $year,
            'course_year' => $course_year,
        ]);

        return "Done";
    }

    public function showCourses($student_id, $year, $course_year)
    {
        $courses = CourseRegistration::where('student_id', $student_id)->where('year', $year)->where('course_year', $course_year)->get();
        $course_id = [];
        foreach($courses as $course){
            array_push($course_id, $course->currentcourse_id);
        }
        $current_courses = [];
        for($i = 0; $i<count($course_id); $i++){
            array_push($current_courses, CurrentCourse::find($course_id[$i]));
        }
        // $check = [$courses, $current_courses];
        // return response()->json($check);
        //return response()->json($current_courses);
        return [$courses, $current_courses];
    }
}
