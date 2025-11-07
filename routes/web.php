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
Route::post('/carrinho/adicionar/{id}', function ($id) {

    $produto = Produto::findOrFail($id);

    $carrinho = session()->get('carrinho', []);

    if(isset($carrinho[$id])) {

        $carrinho[$id]['qtd']++;
    } else {

        $carrinho[$id] = [
            "nome" => $produto->nome,
            "qtd" => 1,
            "preco" => $produto->preco,
            "imagem" => $produto->imagens[0]
        ];
    }

    session()->put('carrinho', $carrinho);

    return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');

})->name('carrinho.adicionar');


Route::get('/carrinho', function () {

    $carrinho = session()->get('carrinho', []);
    $total = 0;
    foreach ($carrinho as $item) {
        $total += $item['preco'] * $item['qtd'];
    }
    return view('carrinho', [
        'carrinhoItens' => $carrinho,
        'total' => $total
    ]);

})->name('carrinho.index'); // Apelido para a rota

Route::post('/carrinho/remover/{id}', function ($id) {
    $carrinho = session()->get('carrinho', []);
    if(isset($carrinho[$id])) {

        unset($carrinho[$id]);
    }
    session()->put('carrinho', $carrinho);
    return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho!');

})->name('carrinho.remover'); // Apelido da rota
