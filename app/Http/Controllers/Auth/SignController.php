<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class SignController extends Controller
{
    //  Muestra la vista de inicio de sesión.

    public function showSignIn()
    {
        return view('auth.signIn')->with('title', 'Iniciar sesion');
    }
    //  Muestra la vista de registro.

    public function showSignUp()
    {
        return view('auth.signUp')->with('title', 'Crear una cuenta');
    }
}
