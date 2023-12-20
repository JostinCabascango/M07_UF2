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
        $usuarios = Usuario::all();
        return view('admin.centre')->with('usuarios', $usuarios);
    }


}
