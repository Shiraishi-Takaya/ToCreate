<?php

namespace App\Http\Controllers;
use App\Models\Work;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        $works = Work::oldest()->get();

        return view('index')
            -> with(['works' => $works]);
    }
}
