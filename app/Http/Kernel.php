protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\CustomAuthMiddleware::class,
        // other web middleware
    ],

    'api' => [
        \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

];
