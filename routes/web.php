<?php

use App\Http\Controllers\SignController;
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
});

// Ruta SingIn
Route::get('/jostin/signin', [SignController::class, 'showSignIn']);

// Ruta SignUp
Route::get('/marc/signup', [SignController::class, 'showSignUp']);
