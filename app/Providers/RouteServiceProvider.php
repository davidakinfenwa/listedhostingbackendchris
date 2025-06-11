<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Symfony\Component\HttpFoundation\Request;
class RouteServiceProvider extends ServiceProvider
{
    // public function register(): void
    // {
    //     RateLimiter::for('api', function (Request $request) {
    //         return Limit::perMinute(60)->by($request->ip());
    //     });
        
    // }

    // /**
    //  * Bootstrap any application services.
    //  */
    // public function boot(): void
    // {
    //     RateLimiter::for('api', function (Request $request) {
    //         return Limit::perMinute(60)->by($request->ip());
    //     });
        
    // }
}
    

