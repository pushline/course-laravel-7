<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {

        dd($_GET);

        return view('site.contato.index');
    }
}
