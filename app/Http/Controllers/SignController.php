<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //  Muestra la vista de inicio de sesión.

    public function showSignIn()
    {
        return view('auth.signIn')->with('title', 'Iniciar Sesion del usuario');
    }
    //  Muestra la vista de registro.

    public function showSignUp()
    {
        return view('auth.signUp')->with('title', 'Creacion de usuario nuevo');
    }
}
