<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
class contact extends Controller
{
    public function index()
    {
        $contact = contactus::all();
        return view ('adminInbox',compact('contact'));
    }


   public function store(Request $request){
    $input = $request->all();
        
    
    $contact = contactUs::create([
        'name'=> $input['name'],
        'email'=>$input['email'],
        'subject'=>$input['subject'],
        'message'=>$input['message']
    ]);
    // return view('welcome')->with('message','sabed');

    return redirect()->back();
   }


   public function destroy($id){
    contactUs::find($id)->delete();
    return redirect()->route('adInbox.index');

   }
}
