<?php

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

Route::get('/cadastrar',[\App\Http\Controllers\cadastrarUsuario::class,'index']);//chamando o caminho ate chegar no cadastrarUsuario index

//Toda vez que o botão enviar for acionado
Route::post('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class,'store']);