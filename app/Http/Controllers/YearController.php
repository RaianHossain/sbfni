<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MarkDestribution;
use App\Models\User;
use App\Models\Year;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class YearController extends Controller
{

    public function index()
    {

        $course = Course::all();
        // $markdestribution = MarkDestribution::all();
        $yearCollection = Year::latest();

        if (request('search')) {
            $yearCollection = $yearCollection
                ->where('year_name', 'like', '%' . request('search') . '%');
        }

        $year = $yearCollection->paginate(10);

        return view('backend.year.index', [
            'years' => $year,
        ]);
    }

    public function create()
    {
        // $this->authorize('create-year');
        $students = User::where('role_id', '=', '3')->get();
        // dd($students);
        $course = Course::all();
        // $markdestribution = MarkDestribution::all();

        return view('backend.year.create', ['course' => $course, 'students' => $students]);
    }

    public function store(Request $request)
    {
        $course = Course::all();
        // $markdestribution = MarkDestribution::all();
        //  @dd($request);
        try {
            Year::create([
                'student_id' => $request->student_id,
                'course_year' => $request->course_year,
                // 'mark_distribution_id' => $request->mark_distribution_id,
                'year' => $request->year,
                'section' => $request->section,
                
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('year.index')->withMessage('Successfully Created!');
    }


    public function edit(Year $year)
    {
        $course = Course::all();
        // $markdestribution = MarkDestribution::all();

        return view('backend.year.edit', [
            'single_year' => $year, 'course' => $course
        ]);
    }

    public function show(Year $year)
    {
        return view('backend.year.show', [
            'show_year' => $year
        ]);
    }

    public function update(Request $request, $id)
    {
        $year = Year::find($id);
        $course = Course::all();
        // $markdestribution = MarkDestribution::all();

        $year->update([

            'year_name' => $request->year_name,
            'course_name' => $request->course_name,
            // 'mark_distribution_id' => $request->mark_distribution_id,
            // 'mark_distribution_id' => implode(',', (array) $request['mark_distribution_id']),
            'year' => $request->year,
                'section' => $request->section,

        ]);

        $year->update();


        return redirect()->route('year.index');
    }

    public function destroy(Year $year)
    {
        try {
            $year->delete();
            return redirect()->route('year.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function showStudents()
    {
        return view('backend.yearwise.temp');
    }

    public function showFirstYearASection($course_year, $year)
    {
        $yearwisestudents = Year::where('course_year', '=', $course_year)->where('year', '=', $year)->get();
        return view('backend.yearwise.yearwisestudent', ['yearwisestudents' => $yearwisestudents]);
    }
}
