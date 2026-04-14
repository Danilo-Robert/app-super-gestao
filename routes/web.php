<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return "Olá, será que deu certo?";
}); 
*/
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () { return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

Use App\Http\Controllers\TesteController;
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback( function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial.';
});