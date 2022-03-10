<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::post('login', [AuthController::class, 'login'])->name('login');
  
Route::get('clave', function () {
    return bcrypt('123');
});


Route::middleware(['auth'])->group(function(){
    
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // ************************Ruta para usuarios**************
    Route::get('users', [UserController::class, 'index'])->name('listUser');//listar usuarios
    Route::get('users/form', [UserController::class, 'storage'])->name('formUser');//Crear usuarios
    Route::post('users', [UserController::class, 'save'])->name('save');//Crear usuarios
    Route::put('users/{id?}', [UserController::class, 'update']);//Actualizar


});


