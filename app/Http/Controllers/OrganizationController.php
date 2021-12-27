<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\User;


class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organization_data = Organization::all();
        return view('organization.index',compact('organization_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $organization = Organization::all();
        return view('organization.create',compact('organization'));
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
        $input = $request->all();

        if($image = $request->file('image')){
            $destination = 'images/';
            $organization_img = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $organization_img);
            $input['image'] = $organization_img;
        }

        $user  = User::create([
            'name'=> $input['name'],
            'email'=>$input['email'],
            'contact'=>$input['contact'],
            // 'email_verified_at'=>$input['date'],
            'address'=>$input['address'],
            'password'=>$input['password'],
            'user_role_id' =>$input['user_role_id']
        ]);
        
        $organization = organization::create([
            'user_id' => $user->id,
            'alt_email' => $input['alt_email'],
            'status' => $input['status'],
            'image' => $input['image'],
        ]);
        // dd($request->all());
        return redirect()->route('organization.index');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(organization $organization)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(organization $organization)
    {
        //
        return view('organization.update',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organization $organization)
    {
        $input = $request->all();
        $user= $request->all();
        $user = $organization->user;
        if($image = $request->file('image')){
            $destination = 'images/';
            $organization_img = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $organization_img);
            $input['image'] = $organization_img;
        }
        $user->update([
            'name'=> $input['name'],
            'email'=>$input['email'],
            'contact'=>$input['contact'],
            'email_verified_at'=>$input['email_verified_at'],
            'address'=> $input['address'],
            
            'user_role_id' =>$input['user_role_id']
            
        ]);
        
        
        $organization->update([
            'user_id' => $user->id,
            'alt_email' => $input['alt_email'],
            // 'status' => $input['status'],
            'image' => $input['image']
        ]);
        // dd($request->all());
    
        return redirect()->route('organization.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Organization::find($id)->delete();
        return redirect()->route('organization.index');
    }
}
