<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\client;
use App\Models\admin;
use App\Models\organization;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth::user()->user_role_id;
        if ($user == 3) {
            return redirect()->route('profile');
        }elseif ($user == 2) {
           return redirect()->route('inbox.viewMessage');
        }
        $contact =contactUs::all();
        return view('home',compact('contact'));
    }

    public function profile(){
        $user = auth::user()->user_role_id;
        if ($user == 3) {
            $id = auth::user()->client->id; 
            $profile = client::find($id);
        }elseif ($user == 2) {
            $id = auth::user()->organization->id; 
            $profile = organization::find($id);
        }else{
            $id = auth::user()->admin->id; 
            $profile = admin::find($id);
        }
        return view('frontend/profile',compact('profile'));
    }

 
}
