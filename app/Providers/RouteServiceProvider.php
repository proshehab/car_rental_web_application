<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * This service provider is used to bootstrap and configure the application's route settings in Laravel 11.
 * It defines the default home route, bootstraps the route files, and configures rate limiting.
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the \"home\" route for your application.
     *
     * @var string
     */
    public const HOME = '/admin/dashboard';

    /**
     * Bootstrap any application services and configure routes.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('api')
                ->prefix('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        \Illuminate\Support\Facades\RateLimiter::for('api', function (\Illuminate\Http\Request $request) {
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
