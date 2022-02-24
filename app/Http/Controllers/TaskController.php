<?php

namespace App\Http\Controllers;
use App\Models\Feature;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(Request $request, Feature $feature)
    {
        $task = new Task();
        $task->feature_id = $feature->id;
        $task->name = $request->name;
        if ($request->type === 'study') {
            $task->type = true;
        } else {
            $task->type = false;
        }
        $task->deadline = $request->deadline;
        $task->is_done = false;
        $task->save();

        return redirect()
            -> route('features.show', $feature);
    }
}
