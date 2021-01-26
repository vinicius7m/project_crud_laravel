<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function() {
    $pessoa = \App\Pessoa::find(1);
    $pessoa->nome = "Usuário editado...";
    
    $pessoa->save();    

    // SELECT * FROM pessoas
    return \App\Pessoa::all();
    // \App\Pessoa::paginate(10) - paginar dados
});

/* SISTEMA DE ROTAS
    * Route::get - Resgata
    * Route::post - Cria 
    * Route::put - Atualiza
    * Route::delete - Deleta

*/  

Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('pessoas')->group(function() {
        Route::get('/', 'PessoaController@index')->name('admin.pessoas.index');
        Route::get('/create', 'PessoaController@create')->name('admin.pessoas.create');
        Route::post('/pessoa', 'PessoaController@pessoa')->name('admin.pessoas.pessoa');

    });
    
}); 