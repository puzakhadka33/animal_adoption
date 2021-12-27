<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = animal::all();
        return view('animal.index',compact("animal"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('animal.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        if($image = $request->file('image')){
            $destination = 'images/';
            $animal_img = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $animal_img);
            $input['image'] = "$animal_img";
        }
        // dd(Auth::user()->id);
        $input ['organization_id'] = Auth::user()->id;
        animal::create($input);
        // $data->save();
        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(animal $animal)
    {
        //
        return view('animal.update',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animal $animal)
    {
        //
        $input = $request->all();
        if($image = $request->file('image')){
            $destination = 'images/';
            $animal_img = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $animal_img);
            $input['image'] = "$animal_img";
        }
        // dd(Auth::user()->id);
        $animal->update($input);
        return redirect()->route('animal.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return redirect()->route('animal.index');
    }
}
