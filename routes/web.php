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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'principal'])->name('site.sobrenos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'principal'])->name('site.contato');

Route::prefix('/app')->group(function () {
    Route::get('/login', function () {
        return  'Substitua pelo nome da sua view de login';
    })->name('app.login');
    Route::get('/clientes', function () {
        return view('clientes'); // Substitua 'view' pelo nome da sua view de clientes
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return view('fornecedores'); // Substitua 'view' pelo nome da sua view de fornecedores
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return view('produtos'); // Substitua 'view' pelo nome da sua view de produtos
    })->name('app.produtos');
});
