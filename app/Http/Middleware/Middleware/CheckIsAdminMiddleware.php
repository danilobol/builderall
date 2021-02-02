<?php

namespace App\Http\Middleware\Middleware;

use Closure;

class CheckIsAdminMiddleware
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
        $user = auth()->user();
        if($user->id_rank == '1'){
            return redirect('/');
        }

        return $next($request);

    }
}
