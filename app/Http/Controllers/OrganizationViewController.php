<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\animal;

class OrganizationViewController extends Controller
{
    public function index(){
        $organization = Organization::orderBy('created_at','DESC')->take(1)->get();
        return view('frontend/organizationProfile')->with('organization',$organization);
    }

    public function show($id){
        $organization = Organization::find($id);
        $animals = $organization->animals;
        return view('frontend.organizationProfile',compact('organization'))->with('animals',$animals);
    }

        public function viewOrg(){
            
            $organization = organization::all();
            return view('orgList',compact('organization'));

        }
    
}
