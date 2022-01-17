<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\Categories;
use App\Models\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('animal-access')) {
            return abort(401);
        }
        $user = Auth::user()->user_role_id;
        if($user== 1){
            $animal = animal::all();
        }else{
            $organization = Auth::user()->organization->id;
            $animal = DB::table('animals')->where('organization_id',$organization)->get();
           
        }
        return view('animal.index',compact("animal"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('animal-add')) {
            return abort(401);
        }
        $organizations= '';
        if(Auth::user()->user_role_id == 1){
            $organizations = Organization::all();
        }
        // else{
        //     // $organizations = Auth::user()->organization->user->name;
        // }

        $categories = Categories::all();
        return view('animal.create', compact('categories'))->with('organizations',$organizations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('animal-add')) {
            return abort(401);
        }
        
        $input = $request->all();
        if($image = $request->file('image')){
            $destination = 'images/';
            $animal_img = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $animal_img);
            $input['image'] = "$animal_img";
        }
        // dd(Auth::user()->id);
        // $input ['organization_id'] = Auth::user()->id;
        // animal::create($input);

        if(Auth::user()->user_role_id == 1){
            $org = $input['organization_id'];
        }else{
            $org = Auth::user()->organization->id;
        }

        $animal = animal::create([
            'name'=>$input['name'],
            'color'=>$input['color'],
            'height'=>$input['height'],
            'weight'=>$input['weight'],
            'length'=>$input['length'],
            'breed'=>$input['breed'],
            'image'=>$input['image'],
            'description'=>$input['description'],
            'category_id'=>$input['category_id'],
            // 'organization_id'=>Auth::user()->organization->id,
            'organization_id'=>$org,
            
        ]);
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
        if (!Gate::allows('animal-edit')) {
            return abort(401);
        }
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
        if (!Gate::allows('animal-edit')) {
            return abort(401);
        }
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
        if (!Gate::allows('animal-delete')) {
            return abort(401);
        }
        Animal::find($id)->delete();
        return redirect()->route('animal.index');
    }
}
