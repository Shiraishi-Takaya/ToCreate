<?php

namespace App\Http\Controllers;
use App\Models\Work;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::oldest()->get();

        return view('index')
            -> with(['works' => $works]);
    }

    public function show(Work $work)
    {
        return view('work')
            -> with(['work' => $work]);
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return redirect()
            -> route('index');
    }
}
