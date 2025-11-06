<?php

use Illuminate\Support\Facades\Route;

function getProdutosSimulados() {
    return [
        [
            'id'    => 1,
            'nome'  => 'Camiseta Branca',
            'preco' => 49.90,
            // AGORA É UM ARRAY DE IMAGENS
            'imagens' => [
                'produtos/camiseta-frente.jpg', // Imagem principal
                'produtos/camiseta-lado.jpg',
                'produtos/camiseta-costas.jpg',
                'produtos/camiseta-detalhe.jpg'
            ],
            'descricao' => 'Uma camiseta de algodão puro, perfeita para o dia a dia.',
            // NOVO CAMPO
            'tamanhos' => ['P', 'M', 'G', 'GG']
        ],
        [
            'id'    => 2,
            'nome'  => 'Calça Jeans',
            'preco' => 129.50,
            'imagens' => [
                'produtos/calca-frente.jpg', // Imagem principal
                'produtos/calca-lado.jpg',
                'produtos/calca-costas.jpg',
                'produtos/calca-detalhe.jpg'
            ],
            'descricao' => 'Calça jeans com corte moderno e lavagem escura.',
            'tamanhos' => [38, 40, 42, 44, 46]
        ],
        [
            'id'    => 3,
            'nome'  => 'Tênis Esportivo',
            'preco' => 249.99,
            'imagens' => [
                'produtos/tenis-1.jpg',
                'produtos/tenis-2.jpg',
                'produtos/tenis-3.jpg',
                'produtos/tenis-4.jpg'
            ],
            'descricao' => 'Tênis leve e confortável para suas atividades físicas.',
            'tamanhos' => [39, 40, 41, 42, 43]
        ],

    ];
}

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function () {

    $produtos = getProdutosSimulados();

    return view('produtos', compact('produtos'));
});

Route::get('/produto/{id}', function ($id) {
    $todosProdutos = getProdutosSimulados();


    $produtoEncontrado = null;

    foreach ($todosProdutos as $p){
        if ($p['id']== $id){
            $produtoEncontrado = $p;
            break;
        }
    }


    if ($produtoEncontrado){
        return view('produto-detalhe', ['produto' => $produtoEncontrado]);
    }else{
        abort(404);
    }

});

Route::get('/carrinho', function () {
    return view('carrinho');
});
