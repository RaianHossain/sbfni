<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MarkDestribution;
use App\Models\Year;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class YearController extends Controller
{

    public function index()
    {

        $course = Course::all();
        $markdestribution = MarkDestribution::all();
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
        $course = Course::all();
        $markdestribution = MarkDestribution::all();

        return view('backend.year.create', ['course' => $course, 'markdestribution' => $markdestribution]);
    }

    public function store(Request $request)
    {
        $course = Course::all();
        $markdestribution = MarkDestribution::all();
        //  @dd($request);
        try {
            Year::create([
                'year_name' => $request->year_name,
                'course_name' => $request->course_name,
                // 'mark_distribution_id' => $request->mark_distribution_id,
                'mark_distribution_id' => implode(',', (array) $request['mark_distribution_id']),
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
        $markdestribution = MarkDestribution::all();

        return view('backend.year.edit', [
            'single_year' => $year, 'course' => $course, 'markdestribution' => $markdestribution
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
        $markdestribution = MarkDestribution::all();

        $year->update([

            'year_name' => $request->year_name,
            'course_name' => $request->course_name,
            // 'mark_distribution_id' => $request->mark_distribution_id,
            'mark_distribution_id' => implode(',', (array) $request['mark_distribution_id']),

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
}
