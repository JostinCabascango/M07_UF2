<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// CRUD de un profesor para un alumno
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = $this->getAllStudents();
        return view('teachers.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userTypes = $this->getUserTypes();
        $userType = 'estudiante';
        return view('teachers.create', compact('userType', 'userTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        $this->createStudent($request);
        return redirect()->route('teacher.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = $this->findStudent($id);
        return view('teachers.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = $this->findStudent($id);
        return view('teachers.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest($request, $id);
        $this->updateStudent($request, $id);

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->deleteStudent($id);
        return redirect()->route('teacher.index')->with('success', 'Student deleted successfully');
    }

    private function getAllStudents()
    {
        return Usuario::where('role', 'estudiante')->get();
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
    private function createStudent(Request $request)
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
    private function findStudent($id)
    {
        return Usuario::find($id);
    }

    private function updateStudent(Request $request, $id)
    {
        $student = $this->findStudent($id);
        $requestData = $request->except('role', 'password'); // Excluye 'role' y 'password' de los datos de la petición
        $student->update($requestData);
    }

    private function deleteStudent($id)
    {
        $student = $this->findStudent($id);
        $student->delete();
    }
}
