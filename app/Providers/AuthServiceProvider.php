<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isSAdmin', function ($user){
            return $user->role == 'Super Administrator';
        });
        $gate->define('isAdmin', function ($user){
            return $user->role == 'Administrator';
        });
        
        $gate->define('isSecretary', function ($user){
            return $user->role == 'Secretary';
        });

        $gate->define('isDeskOfficer', function ($user){
            return $user->role == 'Desk Officer';
        });

        $gate->define('isTreasurer', function ($user){
            return $user->role == 'Treasurer';
        });
        $gate->define('isClerk', function ($user){
            return $user->role == 'Clerk';
        });
    }

}
