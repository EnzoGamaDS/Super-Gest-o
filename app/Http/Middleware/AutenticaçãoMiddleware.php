<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticaçãoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao,$perfil )
    {
        //return $next($request);

        echo "$metodo_autenticacao -  $perfil <br>";

        if ($metodo_autenticacao == 'padrao') {
            echo 'Verificar usuario e senha no banco <br>';
        }
        if ($perfil == 'visitante') {
            echo 'mostra apenas algumas funcionalidades <br>';
        }

        if (false) {
            return $next($request);
        }else{
            return Response("Acesso negado, rota exige autentiação !");

        }
    }
}
