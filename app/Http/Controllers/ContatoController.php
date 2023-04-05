<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {

        if(!empty($_GET)){
            $template = PHP_SAPI !== 'cli' ? '<pre>%s</pre>' : "\n%s\n";
			printf($template, print_r($_GET, true));;
        }

        return view('site.contato.index');
    }
}
