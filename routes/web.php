<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Database\Eloquent\Model;

use App\Models\Produto;



Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function () {

    $produtos = Produto::all();

    return view('produtos', compact('produtos'));
});

Route::get('/produto/{id}', function ($id) {

    $produto = Produto::findOrFail($id);

    return view('produto-detalhe', ['produto' => $produto]);
});

Route::get('/carrinho', function () {
    return view('carrinho');
});
