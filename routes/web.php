<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos',[SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');

Route::get('/contato',[ContatoController::class, 'salvar'])->name('site.contato')->middleware('log.acesso');

//parametro opicional atraves do ponto de interrogação
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function (){
Route::get('clientes/', function () {return 'clientes';})->name('app.clientes');
Route::get('fornecedores/', [FornecedorController::class, 'index'])->name('app.fornecedores');
Route::get('produtos/', function () {return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'a rota acessada não existe.<a href="'.route('site.index').'"> click aqui</a> para voltar a tela inicial';
});

