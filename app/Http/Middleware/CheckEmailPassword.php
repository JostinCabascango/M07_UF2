<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Recogemos el email y la contraseña
        $email = $request->get('email');
        $password = $request->get('password');
        // Comprobamos que el email y la contraseña no esten vacios
        if (empty($email) || empty($password)) {
            // Si estan vacios redireccionamos a la pagina de error
            return redirect()->route('errorAccess.index');
        }
        // Si no estan vacios continuamos con la peticion
        return $next($request);
    }
}
