<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalListController extends Controller
{
    public function index(){
        $animalList = Animal::orderBy('created_at','DESC')->take(10)->get();
        return view('frontend/inventory')->with('animalList',$animalList);
    }
}
