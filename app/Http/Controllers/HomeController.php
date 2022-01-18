<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\client;
use App\Models\admin;
use App\Models\user;
use App\Models\organization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
           return redirect()->route('profile');
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

        public function editProfile($id){
            $user = auth::user()->user_role_id;
            if ($user == 1) {
             
                $admin = Admin::find($id);
                return redirect()->route('admin.edit',compact('admin'));
            }elseif ($user == 2) {
                 
                $organization = Organization::find($id);
                return redirect()->route('organization.edit',compact('organization'));
            }else {
                $client = client::find($id);
                return view('clientUpdate',compact('client'));
            }
            
        }

        public function updateProfile(Request $request, client $client){

            // dd($request->all());
            
            $input = $request->all();
            $user= auth::user();
            $client= auth::user()->client;
        
            if($image = $request->file('image')){
                $destination = 'images/';
                $clientimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
                $image->move($destination, $clientimg);
                $input['image'] = $clientimg;
            }
            // dd($input['image']);
            
            $user->update([
                'name' => $input['name'],
                'email' =>$input['email'],
                'password' => Hash::make($input['password']),
                'contact' =>$input['contact'],
                'address' =>$input['address'],
                // 'user_role_id' => 3,
            ]);

    
            $client->update([
                // 'user_id'=> $user->id,
                'image'=>$input['image']
            ]); 
            
            return redirect()->route('profile');
            // dd($request->all());
            
        }
}
