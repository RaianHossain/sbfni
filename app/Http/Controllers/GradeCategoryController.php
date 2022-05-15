<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\GradeCategory;
use App\Models\MarkDestribution;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GradeCategoryController extends Controller
{
    public function index()
    {

        $gradecategoryCollection = GradeCategory::latest();

        if (request('search')) {
            $gradecategoryCollection = $gradecategoryCollection
                ->where('gradecategory_name', 'like', '%' . request('search') . '%');
        }

        $gradecategory = $gradecategoryCollection->paginate(10);

        return view('backend.gradecategory.index', [
            'gradecategorys' => $gradecategory,
        ]);
    }

    public function create()
    {
        // $this->authorize('create-gradecategory');

        return view('backend.gradecategory.create');
    }

    public function store(Request $request)
    {
        //  @dd($request);
        try {
            GradeCategory::create([
                'gradecategory_name' => $request->gradecategory_name,
                'gradecategory_mark' => $request->gradecategory_mark,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('gradecategory.index')->withMessage('Successfully Created!');
    }


    public function edit(GradeCategory $gradecategory)
    {

        return view('backend.gradecategory.edit', [
            'single_gradecategory' => $gradecategory
        ]);
    }

    public function show(GradeCategory $gradecategory)
    {
        return view('backend.gradecategory.show', [
            'show_gradecategory' => $gradecategory
        ]);
    }

    public function update(Request $request, $id)
    {
        $gradecategory = GradeCategory::find($id);

        $gradecategory->update([

            'gradecategory_name' => $request->gradecategory_name,
            'gradecategory_mark' => $request->gradecategory_mark,

        ]);

        $gradecategory->update();


        return redirect()->route('gradecategory.index');
    }

    public function destroy(GradeCategory $gradecategory)
    {
        try {
            $gradecategory->delete();
            return redirect()->route('gradecategory.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }}
}
