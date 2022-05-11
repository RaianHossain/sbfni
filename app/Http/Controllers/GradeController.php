<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use App\Models\MarkDestribution;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $gradeCollection = Grade::latest();

        if (request('search')) {
            $gradeCollection = $gradeCollection
                ->where('grade_name', 'like', '%' . request('search') . '%');
        }

        $grade = $gradeCollection->paginate(10);

        return view('backend.grade.index', [
            'grades' => $grade,
        ]);
    }

    public function create()
    {
        // $this->authorize('create-grade');

        return view('backend.grade.create');
    }

    public function store(Request $request)
    {

        //  @dd($request);
        try {
            Grade::create([
                'grade_name' => $request->grade_name,
                'point' => $request->point,
                'point_from' => $request->point_from,
                'point_to' => $request->point_to,
                'mark_from' => $request->mark_from,
                'mark_upto' => $request->mark_upto,
                'comment' => $request->comment,
                'category' => $request->category,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('grade.index')->withMessage('Successfully Created!');
    }


    public function edit(Grade $grade)
    {

        return view('backend.grade.edit', [
            'single_grade' => $grade
        ]);
    }

    public function show(Grade $grade)
    {
        return view('backend.grade.show', [
            'show_grade' => $grade
        ]);
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::find($id);
        

        $grade->update([

            'grade_name' => $request->grade_name,
            'point' => $request->point,
            'point_from' => $request->point_from,
            'point_to' => $request->point_to,
            'mark_from' => $request->mark_from,
            'mark_upto' => $request->mark_upto,
            'comment' => $request->comment,
            'category' => $request->category,
        ]);

        $grade->update();


        return redirect()->route('grade.index');
    }

    public function destroy(Grade $grade)
    {
        try {
            $grade->delete();
            return redirect()->route('grade.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }}
}
