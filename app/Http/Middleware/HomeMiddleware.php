<?php

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
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
        if(session('uid')){

            return $next($request);

        }
        if(array_key_exists('HTTp_REFERER',$_SESSION)){
            session(['back'=>$_SESSION['HTTP_REFERER']]);
        }

        return redirect('/login');

    }
}
