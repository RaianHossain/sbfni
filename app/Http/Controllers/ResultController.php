<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
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
        return $currentList;
    }
}
