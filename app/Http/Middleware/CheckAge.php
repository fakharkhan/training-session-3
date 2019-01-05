<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        //Before Event
//        if($request->age >= 18)
//        {
//            //redirect
//            //return
//            echo ('Your an adult'. now());
//        }
//        else
//        {
//            echo ('Your not an adult'. now());
//        }

        $response =  $next($request); //request sent to broswer

        //After Event

        //echo('i am before sending response');

        return  $response;
    }
}
