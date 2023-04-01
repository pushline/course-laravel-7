<?php

use Illuminate\Support\Facades\Route;

// laravel 8 = Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', 'HomeController@index')->name('site.home'); 

Route::get('/sobre-nos', 'SobreController@index')->name('site.sobre');

Route::get('/contato', 'ContatoController@index')->name('site.contato');

Route::get('/login', 'LoginController@index')->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', 'ClientesController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@index')->name('app.produtos');
});

/*
Route::get('/rota1', function() {
    echo 'VOLTO';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('/rota2', '/rota1');
*/

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="' . route('site.home') . '">clique aqui</a> para ir para página inicial';
});