<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YasKontrol
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $yas = 18;
        if ($yas >= 18) {
            return $next($request);
        } else {
            return redirect("/yasak");
        }
    }
}
