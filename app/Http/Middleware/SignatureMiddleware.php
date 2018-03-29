<?php

namespace App\Http\Middleware;

use Closure;

class SignatureMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $header = 'X-Name')
    {
        $response = $next($request); //$netx() contiene todo los datos que fueron enviados (json, html, images, etc)
        $response->headers->set($header, config('app.name')); //accedemos al atributo headers y con el metodo set, le designamos un nombre, en este caso acudimos al helper config
        return $response;
    }
}
