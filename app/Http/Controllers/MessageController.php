<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('org-inbox-add')) {
            return abort(401);
        }
        $organization = organization::all();
      return view('frontend/help',compact('organization'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('org-inbox-add')) {
            return abort(401);
        }
        $input = $request->all();

        if($image = $request->file('image')){
            $destination = 'images/';
            $helpimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $helpimg);
            $input['image'] = $helpimg;
        }
        $message = Message::create([
            'image' => $input['image'],
            'location'=> $input['location'],
            'description'=>$input['description'],
            'lat'=>$input['lat'],
            'lng'=>$input['lng'],
            'organization_id'=>$input['organization_id'],
            'client_id' => auth::user()->client->id
            // 'client_id' => 1
        ]);
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    
}
