<?php

use App\Http\Controllers\cadastroController;
use App\Http\Controllers\pg\controller AS Pgcontroller;
use App\Http\Controllers\{
    UserController,
    UserForms
};
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/', function () { return view('login'); })->name('telaInicial');

//index
Route::get('index', function () { return view('index'); });

// Pagina em branco
Route::get('felipe', function () { return view('meuestudo'); });

Route::get('profile', function () { return view('profile'); });



//Cadastro de funcionário
Route::get('cadastro', function () { return view('cadastro'); });



//Cadastro de mercadoria
Route::get('controle', function () { return view('controle'); });

Route::get('/users',[UserController::class, 'index'])->name('users.index');//metodo index

Route::get('/register',[UserController::class, 'register']);



//Logout do sistema
Route::get('/sair',[UserController::class, 'sair']);



//Login e Salvar no Banco
Route::get('salvarUsuario',[UserController::class, 'salvarUsuario']);

Route::post('/login',[UserController::class, 'login']);

//Formulario
Route::post('salvarFuncionario',[UserForms::class, 'salvarFuncionario']);

//Controle
Route::post('salvarSacola',[UserForms::class, 'salvarSacola']);