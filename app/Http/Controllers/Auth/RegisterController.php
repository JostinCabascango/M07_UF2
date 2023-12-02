<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function store(Request $request){
        // Recoger los datos del formulario
        $id = $request->input('user_id');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $password = $request->input('password');
        $email = $request->input('email');
        $role = $request->input('role');
        $active = $request->input('active');
    }
}
