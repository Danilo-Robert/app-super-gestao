<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return "Olá, será que deu certo?";
}); 
*/
Use App\Http\Controllers\PrincipalController;
Use App\Http\Controllers\SobreNosController;
Use App\Http\Controllers\ContatoController;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);