<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Funcion para validar el inicio de sesion de un usuario.
    public function store(Request $request)
    {
        // Recoger los datos del formulario.
        $email = $request->input('email');
        $password = $request->input('password');
        // Determinar el tipo de usuario.
        $tipoUsuario = $this->determineUserType($email);
        // Redireccionar a la vista correspondiente.
        switch ($tipoUsuario) {
            case 'alumne':
                return view('users.alumne')->with('email', $email);
                break;
            case 'professor':
                return view('users.professor')->with('email', $email);
                break;
            case 'admin':
                $profesores = $this->createArrayProfessors();
                return view('admin.centre')->with('email', $email)->with('profesores', $profesores);
                break;
            default:
                return redirect()->route('errorAccess.index');
                break;
        }

    }

    // Funcion para determinar el tipo de usuario.
    private function determineUserType($email)
    {
        $tipoUsuario = '';
        // Array con los correos de los usuarios
        $alumne = ['alumne@alumne.com'];
        $professor = ['professor@professor.com'];
        $admin = ['admin@admin.com'];
        //Comprobar si el correo introducido es valido para algun tipo de usuario .
        if (in_array($email, $alumne)) {
            $tipoUsuario = 'alumne';
        } elseif (in_array($email, $professor)) {
            $tipoUsuario = 'professor';
        } elseif (in_array($email, $admin)) {
            $tipoUsuario = 'admin';
        }
        // Devolver el tipo de usuario.
        return $tipoUsuario;
    }
    // Funcion para crea una array de profesores para la vista de admin.
    private function createArrayProfessors()
    {
        $profesores = [
            [
                'id' => 1,
                'name' => 'Oriol',
                'email' => 'oriol@professor',
                'course' => 'DAW2',
            ],
            [
                'id' => 2,
                'name' => 'Joana',
                'email' => 'joanna@professor',
                'course' => 'DAW1',

            ],
            [
                'id' => 3,
                'name' => 'Carla',
                'email' => 'Carla@professor',
                'course' => 'DAW2',
            ],
        ];
        return $profesores;
    }
}
