<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Conversation;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //register new policies
        // Gate::define('update-conversation',function (User $user,Conversation $conversation)
        // {
        //     //update a conversation if it is written by you
        //     return $conversation->user->is($user); //condition to check if the current user is authenticated
        // });


        //global hook for the role of administrator
        Gate::before(function(User $user)
        {   
            if($user->id == 1)
            {
                return true;
            }
        });
    }
}
