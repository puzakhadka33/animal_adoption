<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\AppComponent;
use App\Models\PermissionRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('auth-access')) {
            return abort(401);
        }
        return view('admin.user_roles.index')->with('user_roles', UserRole::all());
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
        return view('admin.user_roles.create')->with('rules', PermissionRule::all())
                                            ->with('components', AppComponent::all());
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
        $user_role = UserRole::create($request->all());
        $user_role->rules()->sync($request->rules);

        return redirect()->route('user-role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRole $userRole)
    {
        if (!Gate::allows('auth-edit')) {
            return abort(401);
        }
        return view('admin.user_roles.edit', compact('userRole'))->with('rules', PermissionRule::all())
                                        ->with('components', AppComponent::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRole $userRole)
    {
        if (!Gate::allows('auth-edit')) {
            return abort(401);
        }
        $userRole->update($request->all());
        $userRole->rules()->sync(array_filter((array) $request->rules));

        return redirect()->route('user-role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRole $userRole)
    {
        $userRole->delete();
        return redirect()->route('user-role.index');
    }
}
