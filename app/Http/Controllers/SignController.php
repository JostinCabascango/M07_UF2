<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function showSignIn(){
        return view('signIn')->with('title' ,'Iniciar Sesion del usuario');

    }
    public function showSignUp(){
        return view('signUp')->with('title' ,'Creacion de usuario nuevo');

    }
}
