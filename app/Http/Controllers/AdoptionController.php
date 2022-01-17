<?php

namespace App\Http\Controllers;

use App\Models\adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Animal;
use App\Models\client;
use App\Models\Organization;
use Illuminate\Support\Facades\Gate;
class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('adoption-access')) {
            return abort(401);
        }
        // $adoption_data = adoption::all();
        // dd($adoption_data);

        $user = Auth::user()->user_role_id;
        if($user== 1){
            $adoption_data = adoption::all();
        }
        else{
        $id = auth::user()->organization->id;
        $organization = Organization::find($id);
        $adoption_data = $organization->adoption;
        }
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
        if (!Gate::allows('adoption-add')) {
            return abort(401);
        }
        //
        // dd(Auth::user()->client->id);

        $input = $request->all();
        // $client= auth::user()->client->id;
        $adoptoin = adoption::create([
            
            // 'date' => request('date'),
            // 'description' => request('description'),
            // 'animal_id'=> request('animal_id'),
            // 'organization_id'=> request('organization_id'),
            // 'client_id' => $client

            'date' => $input['date'],
            'description' => $input['description'],
            'animal_id'=> $input['animal_id'],
            'organization_id'=> $input['organization_id'],
            'client_id' => Auth::user()->client->id,
        ]);
        
        
        // $data = [];
        // $data['adoption_id'] = $adoptoin->id;
        // $data['client_id'] = Auth::user()->client->id;
        // $user = Auth::user()->id;
        // $add[] = $data;
        // $adoptoin->clients()->sync($add);
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
        if (!Gate::allows('adoption-edit')) {
            return abort(401);
        }
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
    public function destroy($id)
    {
        if (!Gate::allows('adoption-delete')) {
            return abort(401);
        }
        Adoption::find($id)->delete();
        return redirect()->route('adoption.index');
    }

    public function adopt($id){

        $animal = Animal::findOrFail($id);
        return view('adoption.create', compact('animal'));
    }
}
