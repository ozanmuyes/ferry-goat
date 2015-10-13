<?php

namespace App\Http\Middleware;

use Closure;

class Cacheable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->isMethod("GET")) {
            return $next($request);
        }

        $response = $next($request);

        $etag = md5($response->getContent());
        $requestEtag = str_replace('"', '', $request->getETags());

        // Check to see if Etag has changed
        if ($requestEtag && $requestEtag[0] == $etag) {
            $response->setNotModified();
        }

        // Set Etag
        $response->setEtag($etag);

        return $response->header("Cache-Control", "max-age=120, public");
    }
}
