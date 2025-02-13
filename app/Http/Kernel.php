<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware here
        \Illuminate\Foundation\Http\Middleware\HandleCors::class,
        \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
        \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            \Illuminate\ThrottleRequests::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\IsAdmin::class,
        'customer' => \App\Http\Middleware\IsCustomer::class,
    ];
}



// protected $routeMiddleware = [
// // other middlewares
// 'auth' => \App\Http\Middleware\Authenticated::class,
// 'admin' => \App\Http\Middleware\IsAdmin::class,
// 'customer' => \App\Http\Middleware\IsCustomer::class,
// ];