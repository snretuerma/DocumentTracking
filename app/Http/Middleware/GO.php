<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class GO
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role->name == 'go') {
            return redirect()->route('go');
        }
    }
}
