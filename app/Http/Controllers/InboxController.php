<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;

class InboxController extends Controller
{
    public function viewMessage(){
        // if ($organization == auth::user()->organization->id) {
        //     $organization = Organization::find($id);
        //     $message = $organization->message;
        // }
        $id = auth::user()->organization->id;
        $organization = Organization::find($id);
        // $message = Message::all();
        $message = $organization->message;
        return view('orgInbox',compact('message'));
    }
}
