<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MarkDestribution;
use App\Models\MarkInput;
use App\Models\Section;
use App\Models\Student;
use App\Models\Year;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MarkInputController extends Controller
{
    public function index()
    {

        $markinputCollection = MarkInput::latest();

        if (request('search')) {
            $markinputCollection = $markinputCollection
                ->where('exam_name', 'like', '%' . request('search') . '%');
        }

        $markinput = $markinputCollection->paginate(10);

        return view('backend.markinput.index', [
            'markinputs' => $markinput
        ]);
    }

    public function create()
    {
        // $this->authorize('create-markinput');
        $cours=Course::all();
        $year=Year::all();
        $sections=Section::all();
        $students=Student::all();
        $markdistributions=MarkDestribution::all();
        return view('backend.markinput.create',[
            'courses'=>$cours,
            'years'=>$year,
            'sections'=>$sections,
            'students'=>$students,
            'markdistributions'=>$markdistributions
        ]);
    }

    public function store(Request $request)
    {
        //  @dd($request);
        $cours=Course::all();
        $year=Year::all();
        $sections=Section::all();
        $students=Student::all();
        $markdistributions=MarkDestribution::all();
        try {
            MarkInput::create([
                'exam_name' => $request->exam_name,
                'section_name' => $request-> section_name,
                'year' => $request-> year,
                'course_name' => $request-> course_name,
                'student_reg_no' => $request-> student_reg_no,
                'mark' => $request-> mark,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('markinput.index')->withMessage('Successfully Created!');
    }


    public function edit(MarkInput $markinput)
    {   
        $cours=Course::all();
        $year=Year::all();
        $sections=Section::all();
        $students=Student::all();
        $markdistributions=MarkDestribution::all();
        return view('backend.markinput.edit', [
            'single_markinput' => $markinput,
            'courses'=>$cours,
            'years'=>$year,
            'sections'=>$sections,
            'students'=>$students,
            'markdistributions'=>$markdistributions
        ]);
    }

    public function show(MarkInput $markinput)
    {
        return view('backend.markinput.show', [
            'show_markinput' => $markinput
        ]);
    }

    public function update(Request $request, $id)
    {
        $markinput = MarkInput::find($id);

        $markinput->update([
         
            'exam_name' => $request->exam_name,
            'section_name' => $request-> section_name,
            'year' => $request-> year,
            'course_name' => $request-> course_name,
            'student_reg_no' => $request-> student_reg_no,
            'mark' => $request-> mark,

        ]);

        $markinput->update();


        return redirect()->route('markinput.index');
    }

    public function destroy(MarkInput $markinput)
    {
        try {
            $markinput->delete();
            return redirect()->route('markinput.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
