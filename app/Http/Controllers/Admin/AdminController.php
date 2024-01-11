<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Ruta para la vista de un administrador
    public function index()
    {
        $teachers = Usuario::where('role', 'profesor')->get();
        return view('admin.centre')->with('teachers', $teachers);
    }
    // Ruta para la vista de un administrador para crear un profesor
    public function create()
    {
        return view('teachers.create');
    }
    // Almacenar un profesor en la base de datos
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|min:8',
            'role' => 'required',
            'active' => 'boolean',
        ]);
        // Crear el usuario
        Usuario::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            // encripta la contraseña
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => $request->active,
        ]);
        // Redirigir al usuario a la vista de administrador
        return redirect()->route('admin.index')->with('success', 'Teacher created successfully.');
    }
    // Ruta para mostrar un profesor en concreto
    public function show($id)
    {
        return view('teachers.show');
    }
    // Ruta que muestra el formulario para editar un profesor en concreto
    public function edit($id)
    {
        $teacher = Usuario::find($id);
        return view('teachers.edit')->with('teacher', $teacher);
    }
    // Actualizara un profesor existente en la base de datos
    public function update(Request $request, $id)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'role' => 'required',
            'active' => 'boolean',
        ]);
        // Buscar al usuario
        $teacher = Usuario::find($id);
        // Actualizar los datos del usuario
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->email = $request->email;
        $teacher->role = $request->role;
        $teacher->active = $request->active;
        // Guardar los cambios
        $teacher->save();
        // Redirigir al usuario según su rol
        return redirect()->route('admin.index');
    }
    // Eliminara un profesor existente en la base de datos
    public function destroy($id)
    {
        // Buscar al usuario
        $teacher = Usuario::find($id);
        // Eliminar al usuario
        $teacher->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Post deleted successfully');
    }
}
