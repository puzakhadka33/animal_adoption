<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client_data = Clients::all();
        return view('client.index', compact('client_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('client.create');
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
       
        // $user  = User::create([
        //     'name'=> request('name'),
        //     'email'=>request('email'),
        //     'contact'=>request('contact'),
        //     'email_verified_at'=>request('date'),
        //     'address'=>request('address'),
        //     'password'=>request('password'),
        //     'user_role_id' =>request('user_role_id')
        // ]);
        
        // $organization = organization::create([
        //     'user_id' => $user->id,
        //     'alt_email' => request('alt_email'),
        //     'status' => request('status')
        // ]);
        // // dd($request->all());
        // return redirect()->route('client.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        return view('client.update',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {

        $input = $request->all();
        $user = $client->user;
        if($image = $request->file('image')){
            $destination = 'images/';
            $clientimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $clientimg);
            $input['image'] = $clientimg;
        }
        $user->update([
            'name' => $input['name'],
            'email' =>$input['email'],
            'password' =>$input['password'],
            'contact' =>$input['contact'],
            'address' =>$input['address'],
            'user_role_id' => 3,
        ]);

        $client->update([
            'user_id'=> $user->id,
            'image'=>$input['image']
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
