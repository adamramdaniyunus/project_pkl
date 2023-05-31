<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class cekRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        // cek role
        // if(in_array($request->user()->role, $roles)){
        //     return $next($request);
        // }
        // return redirect('/error');

    }
}
