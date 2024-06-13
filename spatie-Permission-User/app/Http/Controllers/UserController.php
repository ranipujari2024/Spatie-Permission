<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:add user',['only' => ['create','store']]);
        $this->middleware('permission:edit user',['only' => ['edit','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get(); 
        return view('role-permission.user.index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::get(); 
        return view('role-permission.user.create',['role' => $role]);
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->syncRoles($request->role);

        return redirect('users')->with('success','User created successfully with role');
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
    public function edit(User $user)
    {   
        $role = Role::get(); 
        $userRoles = $user->roles->pluck('name')->all();
        return view('role-permission.user.edit',['user' => $user, 'role' => $role, 'userRoles' => $userRoles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|max:20',
            'role' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password))
        {
            $data += [
                'password' => Hash::make($request->password)  
            ];
        }
        $user->update($data);
        $user->syncRoles($request->role);

        return redirect('users')->with('success','User updated successfully with role');
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

    public function addPermissionToUser($id)
    {

        $data = User::where('id',$id)->first();
        if($data)
        {
            $permissions = Permission::get(); 
            foreach ($permissions as $key => $permission) 
            {
                $permission['is_present'] = 0;
                if($data->hasDirectPermission($permission->name))
                {
                    $permission['is_present'] = 1;  
                }
            }
            return view('role-permission.role.add-permission',compact('data','permissions'));
        }
    }

    public function postAddPermissionToUser(Request $request, $id)
    {
       $request->validate([
            'permission' => 'required'
        ]);
        $user = User::where('id',$id)->first();
        if($user)
        {
            $permissions = Permission::get(); 
            foreach($permissions as $permission)
            {
                $user->hasDirectPermission($permission->name);
                {
                    $user->revokePermissionTo($permission->name);
                }
            }

            foreach($request->permission as $permission)
            {
                $user->givePermissionTo($permission);
            }

            return redirect('users')->with('success','Permissions granted successfully to user');
        }

            return redirect()->back()->with('error','Something went wrong');
    }
}
