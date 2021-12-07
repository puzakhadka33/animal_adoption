<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\UserRole;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();
        if (!app()->runningInConsole()) {
            $user_roles = UserRole::with('rules')->get();
            foreach ($user_roles as $user_role) {
                foreach ($user_role->rules as $rule) {
                    $rule_list[$rule->rule][] = $user_role->id;
                }
            }
            foreach ($rule_list as $rule => $user_roles) {
                Gate::define($rule, function ($user) use ($user_roles) {
                    foreach($user_roles as $user_role){
                        if ($user->role->id == $user_role) {
                            return true;
                        }
                    }
                });
            }
        }
    }
}