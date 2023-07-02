<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->title=$request->title;
        $res = $role->save();
        if ($res) {
            $role->permissions()->sync($request->permissions);
            return redirect()->route('role.index')->with('success','Role added');
        }else{
            return redirect()->route('role.index')->with('error','Role not added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::where('id',$id)->first();
        if($role){
            return view('admin.role.show',compact('role'));
        }else{
            return redirect()->route('role.index')->with('error','Role not founded');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::where('id',$id)->first();
        $permissions = Permission::all();
        return view('admin.role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $role = Role::findOrFail($id);
        $role->title = $request->title;
        $res = $role->save();
        if ($res) {
            $role->permissions()->sync($request->permissions);
            return redirect()->route('role.index')->with('success','Role updated');
        }else{
            return redirect()->route('role.index')->with('error','Role not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Role::destroy($id);
        if ($res) {
            return redirect()->route('role.index')->with('success','Role deleted');
        }else{
            return redirect()->route('role.index')->with('error','Role not deleted');
        }
    }
}

