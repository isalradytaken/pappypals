<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use URL;
class SecurityCheck
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
       $security_detect_url = [
           URL::to('subusers'),
           URL::to('/'),
           URL::to('/signin'),
       ];       
       $referer_url = rtrim($request->headers->get('referer'),'/');
       if(in_array($referer_url, $security_detect_url)){
           return redirect(URL::to('/SecurityCheck'));
       }
       return $next($request);
    }
}
