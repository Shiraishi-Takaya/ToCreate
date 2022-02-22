<?php

namespace App\Http\Controllers;
use App\Models\Work;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work(Work $work)
    {
        return view('work')
            -> with(['work' => $work]);
    }
}
