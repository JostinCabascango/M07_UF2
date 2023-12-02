<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignController;
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
Route::post('/login', [LoginController::class, 'store'])->name('login.store')
    ->middleware('check.email.password');
// Ruta para registrar un usuario nuevo
Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('check.email.password')->name('register.store');

// Ruta para el error de acceso a la pagina de inicio de sesion
Route::get('/error', function () {
    return 'Error de acceso';
})->name('errorAccess.index');
