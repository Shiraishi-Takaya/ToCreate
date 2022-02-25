<?php

namespace App\Http\Controllers;
use App\Models\Feature;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function show(Feature $feature)
    {
        return view('feature')
            -> with(['feature' => $feature]);
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();

        return redirect()
            -> route('works.show', $feature->work);
    }
}
