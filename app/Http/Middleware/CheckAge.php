<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        // Gracias al middleware se puede interceptar las rutas http y tratar evaluar si dejarla pasar o no, ademas en este apartado se realizo una comprobacion mediante el metodo auth que nos permite comprobar informacion del usuario y dejar pasar la peticion o no.
        if(auth()->user()->email == "many@busitosv.com"){
            return $next($request);
        }else{
            return redirect('no-autorizado');
        }
    }
}
