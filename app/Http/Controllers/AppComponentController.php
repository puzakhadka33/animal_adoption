<?php

namespace App\Http\Controllers;

use App\Models\AppComponent;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AppComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Gate::allows('auth-access')){
            return abort(401);
        }
        return view('admin.app_components.index')->with('app_components', AppComponent::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('auth-add')) {
            return abort(401);
        }
        return view('admin.app_components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('auth-add')) {
            return abort(401);
        }
        AppComponent::create($request->all());
        return redirect()->route('app-component.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppComponent  $appComponent
     * @return \Illuminate\Http\Response
     */
    public function show(AppComponent $appComponent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppComponent  $appComponent
     * @return \Illuminate\Http\Response
     */
    public function edit(AppComponent $app_component)
    {
        if (!Gate::allows('auth-edit')) {
            return abort(401);
        }
        return view('admin.app_components.edit', compact('app_component'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppComponent  $appComponent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppComponent $appComponent)
    {
        if (!Gate::allows('auth-edit')) {
            return abort(401);
        }
        $appComponent->update($request->all());
        return redirect()->route('app-component.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppComponent  $appComponent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppComponent $appComponent)
    {
        if (!Gate::allows('auth-delete')) {
            return abort(401);
        }
        $appComponent->delete();
        return redirect()->route('app-component.index');
    }
}
