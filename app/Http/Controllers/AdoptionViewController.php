<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AdoptionViewController extends Controller
{
    public function sendAnimal($id){
        // $animal = Animal::find($id);
        // return view('adoption.index',compact('animal'));
    }
}
