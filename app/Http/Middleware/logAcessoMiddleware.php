<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class logAcessoMiddleware
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
       $ip = $request->server->get('REMOTE_ADDR');
       $rota = $request->getRequestUri();
       LogAcesso::create(['log'=>"IP : $ip rota $rota"]);

      // return $next($request);

      $resposta =  $next($request);

      $resposta->setStatusCode(201, 'O status da respsota e o texto foram modificadoss');

      return $resposta;

      

    }
}
