<?php

namespace App\Http\Controllers;

use App\Models\PermissionRule;
use App\Models\UserRole;
use App\Models\AppComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PermissionRuleController extends Controller
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
        return view('admin.rules.index')->with('rules', PermissionRule::all())
                                                ->with('app_components', AppComponent::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('auth-add')){
            return abort(401);
        }
        return view('admin.rules.create')->with('app_components', AppComponent::all())
                                            ->with('user_roles', UserRole::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! Gate::allows('auth-add')){
            return abort(401);
        }
        $rule = PermissionRule::create($request->all());
        $rule->roles()->sync($request->roles);
        return redirect()->route('rule.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermissionRule  $permissionRule
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionRule $permissionRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissionRule  $permissionRule
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionRule $rule)
    {
        if(! Gate::allows('auth-add')){
            return abort(401);
        }
        return view('admin.rules.edit', compact('rule'))->with('app_components', AppComponent::all())
                                                        ->with('user_roles', UserRole::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermissionRule  $permissionRule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissionRule $rule)
    {
        if (!Gate::allows('auth-edit')) {
            return abort(401);
        }
        // dd($request->all());
        $rule->update($request->all());
        $rule->roles()->sync(array_filter((array) $request->roles));

        return redirect()->route('rule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRule  $permissionRule
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionRule $rule)
    {
        $rule->delete();
        return redirect()->route('rule.index');
    }
}
