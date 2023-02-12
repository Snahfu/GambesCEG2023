<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role
{

  public function handle($request, Closure $next, String $role)
  {
    if (Auth::check() && Auth::user()->role == "penpos") {
      return $next($request);
    } else if (Auth::check() && Auth::user()->role == "pemain") {
      return $next($request);
    } else if (Auth::check() && Auth::user()->role == "si") {
      return $next($request);
    }
    abort(404);
  }
}
