<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WorkerVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $worker = auth()->user()->worker;

        view()->share([
            'worker' => $worker,
        ]);

        return $next($request);
    }
}
