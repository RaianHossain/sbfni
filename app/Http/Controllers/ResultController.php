<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function getCourses($course_year, $year, $student_id)
    {
        $courseIds = CourseRegistration::where('student_id', $student_id)->where('year', $year)->where('course_year', $course_year)->get();
        $currentList = [];
        foreach ($courseIds as $courseId) {
            
            array_push($currentList, $courseId->mycurrentcourse);
        }
        return [$currentList, $student_id,$course_year, $year];
    }
    
    public function store(Request $request)
    {
        // dd(($request->all()));
        $courses_id = [];
        for($i = 0; $i<count($request->total); $i++){
            array_push($courses_id, "course_id_".$i);
        }

        for($i=0; $i<count($request->total); $i++){
            Result::create([
                'student_id' => $request->student_id,
                'currentcourse_id' => $request->course_id[$i],
                'year' => $request->year,
                'course_year' => $request->course_year,
                'written' => $request->written[$i],
                'practical' => $request->practical[$i],
                'formative' => $request->formative[$i],
                'oral' => $request->oral[$i],
                'written_pass' => $request->written_pass[$i],
                'practical_pass' => $request->practical_pass[$i],
                'formative_pass' => $request->formative_pass[$i],
                'oral_pass' => $request->oral_pass[$i],
                'total' => $request->total[$i],
                'grade' => $request->grade[$i],
            ]);
        }
        return redirect()->back();
    }
}
