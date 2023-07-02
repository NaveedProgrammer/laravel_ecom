<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = new Permission();
        $permission->title=$request->title;
        $res = $permission->save();
        if ($res) {
            return redirect()->route('permission.index')->with('success','Permission added');
        }else{
            return redirect()->route('permission.index')->with('error','Permission not added');
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
        $permission = Permission::where('id',$id)->first();
        if($permission){
            return view('admin.permission.show',compact('permission'));
        }else{
            return redirect()->route('permission.index')->with('error','Permission not founded');
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
        $permission = Permission::where('id',$id)->first();
        return view('admin.permission.edit',compact('permission'));
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
        $res = Permission::where('id',$id)->update([
            'title' => $request->title,
        ]);
        if ($res) {
            return redirect()->route('permission.index')->with('success','Permission updated');
        }else{
            return redirect()->route('permission.index')->with('error','Permission not updated');
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
        $res = Permission::destroy($id);
        if ($res) {
            return redirect()->route('permission.index')->with('success','Permission deleted');
        }else{
            return redirect()->route('permission.index')->with('error','Permission not deleted');
        }
    }
}
