<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\organization;
use App\Models\blog;
use App\Models\animal;
use App\Models\Categories;
class LandingController extends Controller
{
    public function index(){
        $organization = organization::orderBy('created_at','DESC')->take(3)->get();
        $blog = blog::orderBy('created_at','DESC')->take(3)->get();
        $animal = animal::orderBy('created_at','DESC')->take(12)->get();
        return view('welcome')->with('organization',$organization)->with('blog',$blog)->with('animal',$animal);
    }

     public function view($id)
    {
        $animal = animal::find($id);
        return view('frontend/adoption',compact('animal'));
    }
}
