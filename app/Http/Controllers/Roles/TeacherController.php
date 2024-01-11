<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Usuario;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $students = Usuario::where('role', 'estudiante')->get();
        return view('users.professor')->with('students', $students);
    }
}
