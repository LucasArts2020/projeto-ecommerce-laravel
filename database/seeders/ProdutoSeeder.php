<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;


use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->delete();

        $produtos = [
            [
                'id'    => 1,
                'nome'  => 'Molho de Tomate Clássico',
                'preco' => 8.90,

                'imagens' => [
                    'https://images.unsplash.com/photo-1580982362675-8f68f63e46c7?w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1598511854619-7603f17c38f2?w=400&auto=format&fit=crop'
                ],
                'descricao' => 'Molho de tomate italiano clássico, feito com tomates frescos e selecionados.',
                'tamanhos' => ['350g', '500g'] // Usamos pesos/volumes
            ],
            [
                'id'    => 2,
                'nome'  => 'Água de Coco (Garrafa 1L)',
                'preco' => 5.50,
                'imagens' => [
                    'https://images.unsplash.com/photo-1621281358632-31103b41318f?w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1624511280131-f300b1387607?w=400&auto=format&fit=crop'
                ],
                'descricao' => 'Água de coco 100% natural, integral, sem adição de açúcar ou conservantes.',
                'tamanhos' => ['300ml', '1L']
            ],
            [
                'id'    => 3,
                'nome'  => 'Melancia (Fatia)',
                'preco' => 12.99,
                'imagens' => [
                    'https://images.unsplash.com/photo-1589981831302-b2d8f04b2c1f?w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1621343200110-22123518e1d2?w=400&auto=format&fit=crop'
                ],
                'descricao' => 'Fatia de melancia doce e refrescante, pronta para consumir. Perfeita para o verão.',
                'tamanhos' => ['Fatia', 'Metade']
            ],
            [
                'id'    => 4,
                'nome'  => 'Café em Grãos (Pacote 500g)',
                'preco' => 22.50,
                'imagens' => [
                    'https://images.unsplash.com/photo-1551884170-09fb70a31611?w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1511537125867-54b1d6abf4a0?w=400&auto=format&fit=crop'
                ],
                'descricao' => 'Grãos de café Arábica selecionados, torra média, ideal para expresso.',
                'tamanhos' => ['250g', '500g', '1kg']
            ]
        ];

        foreach ($produtos as $produto) {

            Produto::create($produto);
        }
    }
}
