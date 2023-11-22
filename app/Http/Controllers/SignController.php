<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //  Muestra la vista de inicio de sesión.

    public function showSignIn()
    {
        return view('signIn')->with('title', 'Iniciar Sesion del usuario');
    }
    //  Muestra la vista de registro.

    public function showSignUp()
    {
        return view('signUp')->with('title', 'Creacion de usuario nuevo');
    }
}
