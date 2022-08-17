<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $produtos = ['Produto1', 'Produto2', 'Produto3'];

        return $produtos;
    }

    public function show($id)
    {
        return "O produto tem id: {$id}";
    }

    public function create()
    {
        return 'Exibindo o form de cadastro de um novo produto';
    }

    public function edit($id)
    {
        return "Exibindo o produto do id= {$id}";
    }

    public function store()
    {
        return 'Cadastrando um novo produto';
    }

    public function update($id)
    {
        return "Editando o produto de id= {$id}";
    }
}
