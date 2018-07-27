<?php

namespace App\Providers;

use App\ApiUserGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Auth::extend("apiUserGuard",function (){
            return new ApiUserGuard();
        });
        Auth::provider("apiUserProvider",function (){
            return new ApiUserProvider();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
