<?php

namespace App\Http\Controllers;

use App\Models\Amongus;
use App\Models\DoingTask;
use App\Models\Task;
use Illuminate\Http\Request;

class DoingTaskController extends Controller
{
    public function index()
    {
        $doingtasks = response()->json(DoingTask::all());
        return $doingtasks;
    }

    public function show($id, $id2)
    {
        $doingtasks = response()->json(DoingTask::where("amongus_id", $id)->where("task_id", $id2)->first());
        return $doingtasks;
    }

    public function destroy($id, $id2)
    {
        DoingTask::where("amongus_id", $id)->where("task_id", $id2)->first()->delete();
        return redirect('/doingtask/list');
    }

    public function store(Request $request)
    {
        $doingtasks = new DoingTask();
        $doingtasks->amongus_id = $request->amongus_id;
        $doingtasks->task_id = $request->task_id;
        $doingtasks->is_done = $request->is_done;
        $doingtasks->save();
        return redirect('/doingtask/list');
    }

    public function update(Request $request, $id, $id2)
    {
        $doingtask = DoingTask::where("amongus_id", $id)->where("task_id", $id2)->first();
        // $doingtask->amongus_id = $request->amongus_id;
        // $doingtask->task_id = $request->task_id;
        $doingtask->is_done = $request->is_done;
        $doingtask->save();
        
        return redirect('/doingtask/list');
    }

    public function newView()
    {
        $amonguses = Amongus::all();
        $tasks = Task::all();
        return view('doingtask.new', ["amonguses" => $amonguses, "tasks" => $tasks]);
    }

    public function editView($id, $id2)
    {
        $amonguses = Amongus::all();
        $tasks = Task::all();
        $doingtask = DoingTask::where("amongus_id", $id)->where("task_id", $id2)->first();
        return view('doingtask.edit', ["amonguses" => $amonguses, "tasks" => $tasks, "doingtask" => $doingtask]);
    }

    public function listView()
    {
        $doingtasks = DoingTask::all();
        return view("doingtask.list",  ["doingtasks" => $doingtasks]);
    }
}
