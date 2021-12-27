<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationViewController extends Controller
{
    public function index(){
        $organization = Organization::orderBy('created_at','DESC')->take(1)->get();
        return view('frontend/organizationProfile')->with('organization',$organization);
    }
}
