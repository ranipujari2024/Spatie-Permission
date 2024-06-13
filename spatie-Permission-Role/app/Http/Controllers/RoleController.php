<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:add role',['only' => ['create','store']]);
        $this->middleware('permission:edit role',['only' => ['edit','update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::get(); 
        return view('role-permission.role.index',['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role-permission.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('roles')->with('success','Role added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id); 
        return view('role-permission.role.edit',['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,'.$role->id
            ]
        ]);

        $role->update([
            'name' => $request->name
        ]);
        return redirect('roles')->with('success','Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addPermissionToRole($id)
    {
        $permission = Permission::get(); 
        $role = Role::findOrFail($id); 
        $rolePermissions = DB::table('role_has_permissions')
        ->where('role_has_permissions.role_id',$role->id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        return view('role-permission.role.add-permission',['role' => $role, 'permission' => $permission, 'rolePermissions' => $rolePermissions]);
    }

    public function postAddPermissionToRole(Request $request, $id)
    {
        $request->validate([
            'permission' => [
                'required'
            ]
        ],
        [
            'permission.required' => 'Please select at least one permission'
        ]);
        $role = Role::findOrFail($id); 
        $role->syncPermissions($request->permission);

        return redirect('roles')->with('success','Permission added to Role successfully');
    }
}
