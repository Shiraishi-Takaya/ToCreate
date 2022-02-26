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

    public function add(Request $request)
    {
        $feature = new Work();
        $feature->name = $request->name;
        $feature->comment = $request->comment;
        $feature->save();

        return redirect()
            -> route('index');
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
