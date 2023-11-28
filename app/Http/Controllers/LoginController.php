<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Funcion para iniciar sesion.
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // Determinar el tipo de usuario.
        $userType = $this->determineUserType($email);
        // Redireccionar a la vista correspondiente.
        switch ($userType) {
            case 'alumne':
                return view('users.alumne');
                break;
            case 'professor':
                return view('users.professor');
                break;
            case 'admin':
                return view('admin.centre');
                break;
            default:
                return redirect()->route('errorAccess.index');
                break;
        }

    }
    // Funcion para determinar el tipo de usuario.
    private function determineUserType($email)
    {
        $userType = '';
       // Determinar el tipo de usuario con una array

        return $userType;
    }
}
