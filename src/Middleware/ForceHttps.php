<?php

namespace C6Digital\ForceHttps\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        $forceHttps = config('force-https.force');

        if ($forceHttps && ! $request->isSecure()) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
