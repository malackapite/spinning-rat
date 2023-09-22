<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = response()->json(Task::all());
        return $tasks;
    }

    public function show($id)
    {
        $tasks = response()->json(Task::find($id));
        return $tasks;
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        return redirect('/task/list');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect('/task/list');
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();
        return redirect('/task/list');
    }

    public function newView()
    {
        return view('task.new');
    }

    public function editView($id)
    {
        $task = Task::find($id);
        return view('task.edit', ["task" => $task]);
    }

    public function listView()
    {
        $tasks = Task::all();
        return view("task.list", ["tasks" => $tasks]);
    }
}