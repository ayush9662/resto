<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Restoauth
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
      $path=$request->path();
      if(($path=='login'|| $path=='Useradd') && (Session::get('user')))
      {
        return redirect('/main');
      }
      elseif (($path!=='login' && !Session::get('user')) && ($path!=='Useradd' && !Session::get('user')))
      {
      return redirect('/login');
      }
        return $next($request);
    }
}
