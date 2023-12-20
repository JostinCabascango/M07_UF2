<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request);
        $validatedData['password'] = $this->hashPassword($validatedData['password']);

        if ($this->createUser($validatedData)) {
            return redirect()->route('login.create');
        }

        return back()->withErrors([
            'error' => 'Error al registrar el usuario. Por favor, inténtalo de nuevo.',
        ]);
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|min:8',
            'role' => 'required',
            'active' => 'boolean',
        ]);
    }

    private function hashPassword(string $password)
    {
        return Hash::make($password);
    }

    private function createUser(array $userData)
    {
        try {
            Usuario::create($userData);
            return true;
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }
}
