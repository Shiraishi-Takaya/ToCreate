<?php

namespace App\Http\Controllers;
use App\Models\Feature;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function feature(Feature $feature)
    {
        return view('feature')
            -> with(['feature' => $feature]);
    }

}
