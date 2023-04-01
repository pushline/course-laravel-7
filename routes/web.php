<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index'); // laravel 8 = Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/sobre-nos', 'SobreController@index');

Route::get('/contato', 'ContatoController@index');

Route::get('/contato/{nome}/{categoria_id}', 
    function (
        string $nome = "String",
        int $categoria_id = 1
    ) {
        echo "$nome - $categoria_id"; 
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');