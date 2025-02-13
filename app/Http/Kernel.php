protected $routeMiddleware = [
// other middlewares
'auth' => \App\Http\Middleware\Authenticated::class,
'admin' => \App\Http\Middleware\IsAdmin::class,
'customer' => \App\Http\Middleware\IsCustomer::class,
];