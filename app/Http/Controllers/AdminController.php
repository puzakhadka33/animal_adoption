<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('admin-access')) {
            return abort(401);
        }

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
         if (!Gate::allows('admin-add')) {
            return abort(401);
        }
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
        if (!Gate::allows('admin-add')) {
            return abort(401);
        }
        $input = $request->all();
        if($image = $request->file('image')){
            $destination = 'images/';
            $adminimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $adminimg);
            $input['image'] = $adminimg;
        }
        $user  = User::create([
            'name'=> $input['name'],
            'email'=>$input['email'],
            'contact'=>$input['contact'],
            'email_verified_at'=>$input['email_verified_at'],
            'address'=>$input['address'],
            'password'=>Hash::make($input['password']),
            'user_role_id' =>1
        ]);
        
        $admin = Admin::create([
            'user_id' => $user->id,
            'alt_email' => $input['alt_email'],
            'status' => $input['status'],
            'image' => $input['image'],
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
        if (!Gate::allows('admin-edit')) {
            return abort(401);
        }
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
        if (!Gate::allows('admin-edit')) {
            return abort(401);
        }
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
        if (!Gate::allows('admin-delete')) {
            return abort(401);
        }
        Admin::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
