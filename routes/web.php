<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index'); // laravel 8 = Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/sobre-nos', 'SobreController@index');

Route::get('/contato', 'ContatoController@index');
// nome categoria assunto msg

Route::get('/contato/{nome}/{categoria}/{assunto}/{msg}', function (string $nome, string $categoria, string $assunto, string $mensagem) { 
    echo "$nome - $categoria - $assunto - $mensagem"; 
});