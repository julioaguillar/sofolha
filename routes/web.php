<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SiteController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('site.index');
    Route::get('/download', [SiteController::class, 'download'])->name('site.download');
    Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
    Route::resource('/contato', ContatoController::class);
    
    Route::view('/solucoes/departamento-pessoal', 'solucoes.sfdpessoal')->name('solucoes.sfdpessoal');
    Route::view('/solucoes/escrita-fiscal-contabilidade', 'solucoes.efcontabil')->name('solucoes.efcontabil');
    Route::view('/solucoes/automacao-comercial', 'solucoes.sfacomercial')->name('solucoes.sfacomercial');
    Route::view('/solucoes/sf-converter', 'solucoes.sfconverter')->name('solucoes.sfconverter');
    Route::view('/solucoes/advocacia', 'solucoes.advocacia')->name('solucoes.advocacia');
    Route::view('/solucoes/pesquisa-xml', 'solucoes.pesquisaxml')->name('solucoes.pesquisaxml');
});

/*Route::prefix('area-do-cliente')->group(function () {

    Route::get('/login', function() {
        return 'Login Cliente';
    });

    Route::middleware(['auth-cliente'])->group(function() {
    });

});*/

/*Route::prefix('admin')->group(function () {

    Route::get('/login', function() {
        return 'Login Admin';
    })->name('admin.login');

    Route::middleware(['auth'])->group(function() {
        
        Route::get('/dashboard', function() {
            return 'Dashboard';
        });

    });

});*/
