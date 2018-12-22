<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }


    public function insert()
    {
        Role::create(request()->all());

        return redirect()->route('roles.index');
    }


    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit',compact('role'));
    }


    public function update($id)
    {
        $role = Role::find($id);

        if($role)
        {
            $role->update(request()->all());
        }

        return redirect()->route('roles.index');

    }

    public function delete($id)
    {
        $role = Role::find($id);

        if($role)
        {
            $role->delete();
        }

        return redirect()->route('roles.index');
    }

}
