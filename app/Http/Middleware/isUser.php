<?php

namespace App\Http\Middleware;

use Closure;

class isUser
{
     public function handle($request, Closure $next)
    {
      if (auth()->check() && $request->user()->status == 'user') {
        return $next($request);
      }
      return back();
    }
}
