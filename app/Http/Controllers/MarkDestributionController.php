<?php

namespace App\Http\Controllers;

use App\Models\MarkDestribution;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MarkDestributionController extends Controller
{
    
    public function index()
    {

        $markdestributionCollection = MarkDestribution::latest();

        if (request('search')) {
            $markdestributionCollection = $markdestributionCollection
                ->where('mark_distribution_name', 'like', '%' . request('search') . '%');
        }

        $markdestribution = $markdestributionCollection->paginate(10);

        return view('backend.markdestribution.index', [
            'markdestributions' => $markdestribution
        ]);
    }

    public function create()
    {
        // $this->authorize('create-markdestribution');

        return view('backend.markdestribution.create');
    }

    public function store(Request $request)
    {
        //  @dd($request);
        try {
            MarkDestribution::create([
                'mark_distribution_name' => $request->mark_distribution_name,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('markdestribution.index')->withMessage('Successfully Created!');
    }


    public function edit(MarkDestribution $markdestribution)
    {
        return view('backend.markdestribution.edit', [
            'single_markdestribution' => $markdestribution
        ]);
    }

    public function show(MarkDestribution $markdestribution)
    {
        return view('backend.markdestribution.show', [
            'show_markdestribution' => $markdestribution
        ]);
    }

    public function update(Request $request, $id)
    {
        $markdestribution = MarkDestribution::find($id);

        $markdestribution->update([
         
            'mark_distribution_name' => $request->mark_distribution_name,
            // 'markdestribution_code' => $request->markdestribution_code,

        ]);

        $markdestribution->update();


        return redirect()->route('markdestribution.index');
    }

    public function destroy(MarkDestribution $markdestribution)
    {
        try {
            $markdestribution->delete();
            return redirect()->route('markdestribution.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
