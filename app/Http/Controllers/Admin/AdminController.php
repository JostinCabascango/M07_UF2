<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

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
        return view('admin.create');
    }
    // Almacenar un profesor en la base de datos
    public function store(Request $request)
    {
        return view('admin.store');
    }
    // Ruta para mostrar un profesor en concreto
    public function show($id)
    {
        return view('admin.show');
    }
    // Ruta que muestra el formulario para editar un profesor en concreto
    public function edit($id)
    {
        return view('admin.edit');
    }
    // Actualizara un profesor existente en la base de datos
    public function update(Request $request, $id)
    {
        return view('admin.update');
    }
    // Eliminara un profesor existente en la base de datos
    public function destroy($id)
    {
        return view('admin.destroy');
    }
}
