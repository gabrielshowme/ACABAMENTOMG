<?php

use App\Http\Controllers\cadastroController;
use App\Http\Controllers\pg\controller AS Pgcontroller;
use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Pgcontroller::class, 'inicio'])->name('telaInicial');

// Pagina em branco
Route::get('felipe', function () { return view('meuestudo'); });

Route::get('profile', function () { return view('profile'); });
Route::get('cadastro', function () { return view('cadastro'); });
Route::get('controle', function () { return view('controle'); });

Route::get('/users',[UserController::class, 'index'])->name('users.index');//metodo index

Route::get('/register',[UserController::class, 'register']);

Route::post('salvarUsuario',[UserController::class, 'salvarUsuario']);

Route::post('/login',[UserController::class, 'login']);

Route::get('/sair',[UserController::class, 'sair']);

