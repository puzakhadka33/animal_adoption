<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\organization;
use App\Models\blog;
class LandingController extends Controller
{
    public function index(){
        $organization = organization::orderBy('created_at','DESC')->take(3)->get();
        $blog = blog::orderBy('created_at','DESC')->take(1)->get();
        return view('frontend/landing')->with('organization',$organization)->with('blog',$blog);
    }
}
