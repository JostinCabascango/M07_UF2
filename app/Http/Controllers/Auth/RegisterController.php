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
        $id = $request->input('user_id');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $password = $request->input('password');
        $email = $request->input('email');
        $role = $request->input('role');
        $active = $request->input('active');
        // Si el rol es "alumnat", es un alumno y se le muestra la vista de alumno
        if ($role == "alumnat") {
            $alumno = [
                'user_id' => $id,
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'role' => $role,
                'active' => $active
            ];
            return view('users.alumne')->with('alumno', $alumno);
        }
        // Si el rol es "professorat", es un profesor y se le muestra la vista de profesor
        if ($role == "professorat") {
            $profesor = [
                'user_id' => $id,
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'role' => $role,
                'active' => $active
            ];
            return view('users.professor')->with('profesor', $profesor);
        }
    }
}
