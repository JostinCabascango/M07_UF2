<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignController;
use App\Http\Controllers\Roles\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Ruta para la vista de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Ruta de la vista de inicio de sesion de un usuario
Route::get('/login', [SignController::class, 'showSignIn'])->name('login.create');

// Ruta de la vista de registro de un usuario
Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup.create');

// Ruta para validar el inicio de sesion de un usuario
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Ruta para registrar un usuario nuevo
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Ruta para la vista de un alumno
Route::get('/alumno', function () {
    return view('users.alumne');
})->name('alumno.index');

// Ruta para la vista de un administrador
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// Ruta para la vista de un profesor
Route::get('/profesor', [TeacherController::class, 'index'])->name('teacher.index');
