<?php

namespace App\Http\Controllers;
use App\Models\Work;
use App\Models\Feature;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function show(Feature $feature)
    {
        return view('feature')
            -> with(['feature' => $feature]);
    }

    public function add(Request $request, Work $work)
    {
        $feature = new Feature();
        $feature->work_id = $work->id;
        $feature->name = $request->name;
        $feature->comment = $request->comment;
        $feature->is_done = false;
        $feature->save();

        return redirect()
            -> route('works.show', $work);
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();

        return redirect()
            -> route('works.show', $feature->work);
    }

    public function done(Feature $feature)
    {
        $feature->is_done = !($feature->is_done);
        $feature->save();

        return redirect()
            -> route('features.show', $feature);
    }
}
