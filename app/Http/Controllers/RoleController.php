<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
    public function index(){
        $roles = response()->json(Role::all());
        return $roles;
    }

    public function show($id){
        $roles = response()->json(Role::find($id));
        return $roles;
    }

    public function destroy($id){
        Role::find($id)->delete();
        return redirect('/role/list');
    }

    public function store(Request $request){
        $role= new Role();
        $role->name=$request->name;
        $role->save();
        return redirect('/role/list');
    }

    public function update(Request $request, $id){
        $role= Role::find($id);
        $role->name=$request->name;
        $role->save();
        return redirect('/role/list');
    }

    public function newView(){
        $roles = Role::all();
        return view('role.new', ['roles' => $roles]);
    }

    public function editView($id){
        $role = Role::find($id);
        return view('role.edit', [ "role" => $role]);
    }

    public function listView(){
        $roles = Role::all();
        return view("role.list", ["roles" => $roles]);
    }
}
