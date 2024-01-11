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


}
