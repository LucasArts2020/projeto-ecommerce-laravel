<?php

use App\Models\Produto;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $produtos = Produto::latest()->take(4)->get();
    return view('home', compact('produtos'));

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
    $carrinho = session()->get('carrinho', []);
    $total = 0;
    foreach ($carrinho as $item) {
        $total += $item['preco'] * $item['qtd'];
    }
    return view('carrinho', [
        'carrinhoItens' => $carrinho,
        'total' => $total
    ]);
})->name('carrinho.index');

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
    return redirect()->back()->with('success', 'Produto adicionado!');
})->name('carrinho.adicionar');

Route::post('/carrinho/remover/{id}', function ($id) {
    $carrinho = session()->get('carrinho', []);
    if(isset($carrinho[$id])) {
        unset($carrinho[$id]);
    }
    session()->put('carrinho', $carrinho);
    return redirect()->route('carrinho.index')->with('success', 'Produto removido!');
})->name('carrinho.remover');

Route::get('/checkout', function () {
    $carrinho = session()->get('carrinho', []);
    if (count($carrinho) == 0) {
        return redirect()->route('carrinho.index');
    }$total = 0;
    foreach ($carrinho as $item) {
        $total += $item['preco'] * $item['qtd'];
    }
    return view('checkout', [
        'total' => $total
    ]);

})->name('checkout.index');

Route::post('/checkout/processar', function () {

    session()->forget('carrinho');


    return redirect()->route('checkout.sucesso');

})->name('checkout.processar');



Route::get('/pedido-concluido', function () {


    return view('pedido-concluido');

})->name('checkout.sucesso');
