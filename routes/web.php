<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index'); // laravel 8 = Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/sobre-nos', 'SobreController@index');

Route::get('/contato', 'ContatoController@index');

Route::get('/login', 'LoginController@index');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', 'ClientesController@index');
    Route::get('/fornecedores', 'FornecedoresController@index');
    Route::get('/produtos', 'ProdutosController@index');
});
