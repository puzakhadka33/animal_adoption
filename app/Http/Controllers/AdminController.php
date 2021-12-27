<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin_data = Admin::all();
        return view('admin.admin.index',compact('admin_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $admin = Admin::all();
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user  = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'email_verified_at'=>$request->date,
            'address'=>$request->address,
            'password'=>$request->password,
            'user_role_id' =>$request->user_role_id
        ]);
        
        $admin = Admin::create([
            'user_id' => $user->id,
            'alt_email' => $request->alt_email,
            'status' => $request->status
        ]);
        return redirect()->route('admin.index');

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
        return view('admin.update',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
        $admin->update($request->all());
        return redirect()->route('admin.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Admin::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
