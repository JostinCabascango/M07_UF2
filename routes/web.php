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
Route::view('/', 'welcome')->name('home');


Route::prefix('login')->group(function () {
    Route::get('/', [SignController::class, 'showSignIn'])->name('login.create');
    Route::post('/', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Ruta para la vista de un alumno
Route::get('/alumno', function () {
    return view('users.alumne');
})->name('alumno.index');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::prefix('profesor')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/{id}', [TeacherController::class, 'show'])->name('teacher.show');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
});
Route::view('/alumno', 'users.alumne')->name('alumno.index');
