<?php

namespace App\Http\Middleware;

use Closure;

class OnlyUserAgents
{
    protected $allowedUserAgents = [
        "Ferry-Goat-Angular"
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!in_array(@$request->header("User-Agent"), $this->allowedUserAgents)) {
            return abort(412, "The user agent is not allowed.");
        }

        return $next($request);
    }
}
