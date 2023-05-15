<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\CreateUser;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => CreateUser::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
     
        Gate::define('isAdmin',function ($user){
            return $user->role == 'admin';
        });

        Gate::define('isModerate',function ($user){
            return $user->role == 'moderate';
        });

        Gate::define('isUser',function ($user){
            return $user->role == 'user';
        });


    }
}
