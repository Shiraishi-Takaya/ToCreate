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
}
