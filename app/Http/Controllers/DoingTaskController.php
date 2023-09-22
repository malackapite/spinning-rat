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

    public function show($id)
    {
        $doingtasks = response()->json(DoingTask::find($id));
        return $doingtasks;
    }

    public function destroy($id)
    {
        DoingTask::find($id)->delete();
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

    public function update(Request $request, $id)
    {
        $doingtasks = DoingTask::find($id);
        $doingtasks->amongus_id = $request->amongus_id;
        $doingtasks->task_id = $request->task_id;
        $doingtasks->is_done = $request->is_done;
        $doingtasks->save();;
        return redirect('/doingtask/list');
    }

    public function newView()
    {
        $amonguses = Amongus::all();
        $tasks = Task::all();
        return view('doingtask.new', ["amonguses" => $amonguses, "tasks" => $tasks]);
    }

    public function editView($id)
    {
        $amonguses = Amongus::all();
        $tasks = Task::all();
        $doingtasks = DoingTask::find($id);
        return view('doingtask.edit', ["amonguses" => $amonguses, "tasks" => $tasks, "doingtasks" => $doingtasks]);
    }

    public function listView()
    {
        $doingtasks = DoingTask::all();
        return view("doingtask.list",  ["doingtasks" => $doingtasks]);
    }
}
