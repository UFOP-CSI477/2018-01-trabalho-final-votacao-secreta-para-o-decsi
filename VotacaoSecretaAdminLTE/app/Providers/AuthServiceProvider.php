<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
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
    public function boot()
    {
        $this->registerPolicies();
        
        
     Gate::define('admin', function(){
                if (Auth::check()) {
          if(Auth::user()->type === 0 ){
             return true;  
          }
          return false;
        }
      });
      Gate::define('users', function(){
                if (Auth::check()) {
          if(Auth::user()->type != 0 ){
             return true;  
          }
          return false;
        }
      });
       
        //
    }
}
