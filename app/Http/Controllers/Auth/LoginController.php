<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario
        $usuario = Usuario::where('email', $request->email)->first();

        // Verificar la contraseña
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Redirigir al usuario según su rol y pasarle el usuario como parámetro a la ruta
            return $this->redirectUserByRole($usuario->role)->with('usuario', $usuario);
        }

        // Si las credenciales son incorrectas, redirigir con un mensaje de error
        return back()->withErrors([
            'error' => 'Las credenciales proporcionadas no son correctas',
        ]);
    }

    private function redirectUserByRole($role)
    {
        // Rutas a las que se redirigirá al usuario según su rol
        $routes = [
            'centro' => 'admin.index',
            'estudiante' => 'alumno.index',
            'profesor' => 'profesor.index',
        ];

        return redirect()->route($routes[$role]);
    }
}
