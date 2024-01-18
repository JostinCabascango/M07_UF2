<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// CRUD de un administrador para un profesor
class AdminController extends Controller
{
    public function index()
    {
        $teachers = $this->getAllTeachers();
        return view('admin.index', compact('teachers'));
    }

    public function create()
    {
        $userTypes = $this->getUserTypes();
        $userType = 'profesor';
        return view('teachers.create', compact('userType', 'userTypes'));
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        $this->createTeacher($request);
        return redirect()->route('admin.index')->with('success', 'Teacher created successfully.');
    }

    public function show($id)
    {
        $teacher = $this->findTeacher($id);
        return view('teachers.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = $this->findTeacher($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $this->validateRequest($request, $id);
        $this->updateTeacher($request, $id);
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $this->deleteTeacher($id);
        return redirect()->route('admin.index')->with('success', 'Teacher deleted successfully');
    }

    private function getAllTeachers()
    {
        return Usuario::where('role', 'profesor')->get();
    }

    private function getUserTypes()
    {
        return [
            'profesor' => 'Profesor',
            'estudiante' => 'Estudiante',
            'centro' => 'Administrador'
        ];
    }

    private function validateRequest(Request $request, $id = null)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'role' => 'required',
            'active' => 'boolean',
        ];

        // Solo validar la contraseña cuando se está creando un nuevo profesor
        if (!$id) {
            $rules['password'] = 'required|min:8';
        }

        $request->validate($rules);
    }

    private function createTeacher(Request $request)
    {
        Usuario::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => $request->active,
        ]);
    }

    private function findTeacher($id)
    {
        return Usuario::find($id);
    }

    private function updateTeacher(Request $request, $id)
    {
        $teacher = $this->findTeacher($id);
        $requestData = $request->except('role', 'password'); // Excluye 'role' y 'password' de los datos de la petición
        $teacher->update($requestData);
    }

    private function deleteTeacher($id)
    {
        $teacher = $this->findTeacher($id);
        $teacher->delete();
    }
}
