<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::get();
        return view('role-permission.role.index', ['roles' => $roles]);
    }


    public function create()
    {
        return view('role-permission.role.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]);
        Role::create([
            'name' => $request->name
        ]);
        return redirect('roles')->with('status', 'Role Created Successfully');


        }
}
