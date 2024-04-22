<?php

use App\Http\Controllers\pg\controller AS Pgcontroller;
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

Route::get('/', [Pgcontroller::class, 'inicio']);

// Pagina em branco
Route::get('felipe', function () { return view('meuestudo'); });

Route::get('profile', function () { return view('profile'); });
Route::get('cadastro', function () { return view('cadastro'); });
Route::get('controle', function () { return view('controle'); });

