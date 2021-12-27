<?php

namespace App\Http\Controllers;

use App\Models\adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Animal;
class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adoption_data = adoption::all();

        return view('adoption.index', compact('adoption_data')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // return view('adoption.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd(Auth::user()->client->id);
        $adoptoin = adoption::create([
            
            'date' => request('date'),
            'description' => request('description'),
            'animal_id'=> request('animal_id'),
            'organization_id'=> request('organization_id')

             
                
        ]);
        $data = [];
        $data['adoption_id'] = $adoptoin->id;
        $data['client_id'] = Auth::user()->client->id;
        $user = Auth::user()->client->id;
        $add[] = $data;
        $adoptoin->clients()->sync($add);
        

        // $data->save();
        return redirect()->route('adoption.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show(adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit(adoption $adoption)
    {
        //
        return view('admin.adoption.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(adoption $adoption)
    {
        //
        return view('admin.adoption.index');
    }

    public function adopt($id){
        $animal = Animal::findOrFail($id);
        return view('adoption.create', compact('animal'));
    }
}
