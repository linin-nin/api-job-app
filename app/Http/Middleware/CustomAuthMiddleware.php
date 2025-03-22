<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the API token is present and valid
        $apiToken = $request->header('Authorization');

        if (!$apiToken || $apiToken !== 'API_Token') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Proceed to the next request
        return $next($request);
    }
}
