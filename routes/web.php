<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignController;
use App\Http\Controllers\Files\FileController;
use App\Http\Controllers\Roles\StudentController;
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

Route::view('/', 'welcome')->name('home');

Route::prefix('login')->group(function () {
    Route::get('/', [SignController::class, 'showSignIn'])->name('login.create');
    Route::post('/', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

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
Route::prefix('file')->group(function () {
    Route::get('/', [FileController::class, 'index'])->name('file.index');
    Route::get('/create', [FileController::class, 'create'])->name('file.create');
    Route::post('/', [FileController::class, 'store'])->name('file.store');
    Route::get('/{id}', [FileController::class, 'show'])->name('file.show');
    Route::get('/{id}/edit', [FileController::class, 'edit'])->name('file.edit');
    Route::put('/{id}', [FileController::class, 'update'])->name('file.update');
    Route::delete('/{id}', [FileController::class, 'destroy'])->name('file.destroy');
});

Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/', [StudentController::class, 'store'])->name('student.store');
    Route::get('/{id}', [StudentController::class, 'show'])->name('student.show');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
});
