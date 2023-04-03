<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'Y'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'Y'],
            3 => ['nome' => 'Fornecedor 4', 'status' => 'Y'],
            4 => ['nome' => 'Fornecedor 5', 'status' => 'N'],
        ];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
