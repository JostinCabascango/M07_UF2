<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        // Recoger los datos del formulario
        $userData = $this->getUserData($request);
        // Determinar el rol del usuario
        // Si el rol es 'alumnat'
        if ($userData['role'] == 'alumnat') {
            // Devolver la vista para el registro de un alumno con los datos del formulario
            return view('users.perfil')->with('title', 'Informacion del usuario')->with('userData', $userData);
        }
        // Si el rol es 'professorat'
        elseif ($userData['role'] == 'professorat') {
            // Devolver la vista para el registro de un profesor con los datos del formulario
            return view('users.perfil')->with('title', 'Informacion del usuario')->with('userData', $userData);
        }
        // Si el rol no es ninguno de los anteriores devolver la vista de error
        else {
            return view('auth.errorAccess')->with('title', 'Error de acceso');
        }
    }
    private function getUserData(Request $request)
    {
        return [
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'active' => $request->input('active')
        ];
    }
}
