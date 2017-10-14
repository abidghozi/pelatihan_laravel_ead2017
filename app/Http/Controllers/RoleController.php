<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index(){
        $datas = Role::all();
        return view('role.index', ['datas' => $datas]);
    }

    public function create(){
        return view('role.add');
    }

    public function store(Request $request){
        Role::create(['name' => $request->nama]);
        return redirect(route('role.index'));
    }

    public function show(Role $role)
    {
        //
        $data = Role::findOrFail($role->id);
        $permissions = config('permission-list');
        return view('role.show', ['data' => $data, 'permissions' => $permissions]);
    }

    public function update(Request $request, Role $role){
        $role->syncPermissions($request->input('permissions'));
        return redirect(route('role.index'));
    }
}
