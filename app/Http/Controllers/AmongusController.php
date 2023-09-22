<?php

namespace App\Http\Controllers;

use App\Models\Amongus;
use App\Models\Role;
use Illuminate\Http\Request;

class AmongusController extends Controller
{
    public function index()
    {
        $tasks = response()->json(Amongus::all());
        return $tasks;
    }

    public function show($id)
    {
        $tasks = response()->json(Amongus::find($id));
        return $tasks;
    }

    public function delete($id)
    {
        Amongus::find($id)->delete();
        return redirect('/amongus/list');
    }

    public function store(Request $request)
    {
        $amongus = new Amongus();
        $amongus->name = $request->name;
        $amongus->color = $request->color;
        $amongus->roleId = $request->roleId;
        $amongus->save();
        return redirect('/amongus/list');
    }

    public function update(Request $request, $id)
    {
        $amongus = Amongus::find($id);
        $amongus->name = $request->name;
        $amongus->color = $request->color;
        $amongus->roleId = $request->roleId;
        $amongus->save();
        return redirect('/amongus/list');
    }

    public function newView()
    {
        $roles = Role::all();
        return view('amongus.new', ['roles' => $roles]);
    }

    public function editView($id)
    {
        $amongus = Amongus::find($id);
        $roles = Role::all();
        return view('amongus.edit', ["amongus" => $amongus, 'roles' => $roles]);
    }

    public function listView()
    {
        $amonguses = Amongus::all();
        return view("amongus.list", ["amonguses" => $amonguses]);
    }
}
