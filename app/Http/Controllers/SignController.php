<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function showSignIn(){
        return view('signin')->with('title' ,'Iniciar Sessio del usuario');

    }
}
