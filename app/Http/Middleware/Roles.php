<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        if ($user->role == $role) {

            if($user->role == 'worker') {
                if ($user->worker->actived_at) {
                    return $next($request);
                }
            } else {
                return $next($request);
            }
            
        }

        return abort(404, 'Page not found');
    }
}
