<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validar los datos del formulario.
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'active' => 'required',
        ]);
        // Crear el usuario en la base de datos.
        $usuario=Usuario::created([
            'name' => $request->name,
            'surname' => $request->surname,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'role' => $request->role,
            'active' => $request->active,
        ]);
        // Redireccionar al usuario a la vista de login.
        return redirect()->route('login.store');

    }
}
