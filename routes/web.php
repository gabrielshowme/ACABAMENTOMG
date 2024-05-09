<?php

use App\Http\Controllers\cadastroController;
use App\Http\Controllers\pg\controller AS Pgcontroller;
use App\Http\Controllers\{
    SaveProduction,
    UserController,
    UserForms,
    UserProduction
};
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/', function () { return view('login'); })->name('telaInicial');

//index
Route::get('index', function () { return view('index'); });

// Pagina em branco

Route::get('profile', function () { return view('profile'); });



//CADASTRO DE FUNCIONARIO
//Route::get('cadastro', function () { return view('cadastro'); });
Route::get('cadastro',[UserForms::class, 'cadastro']);
Route::get('salvarFuncionario',[UserForms::class, 'salvarFuncionario']);



//Cadastro de mercadoria
Route::get('controle', function () { return view('controle'); });

Route::get('/users',[UserController::class, 'index'])->name('users.index');//metodo index

Route::get('/register',[UserController::class, 'register']);



//LOGOUT DO SISTEMA
Route::get('/sair',[UserController::class, 'sair']);



//LOGIN E SALVAR NO BANCO
Route::get('salvarUsuario',[UserController::class, 'salvarUsuario']);

Route::post('/login',[UserController::class, 'login']);


//CONTROLE DE ESTOQUE
Route::post('salvarSacola',[SaveProduction::class, 'salvarSacola']);


//PRODUCAO
Route::get('/producao',[UserProduction::class, 'producao']);

