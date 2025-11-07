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
                'nome'  => 'Camiseta Preta',
                'preco' => 49.90,

                'imagens' => [
                    'camiseta-frente.jpg',
                    'camiseta-lado.jpg',
                ],
                'descricao' => 'Uma camiseta de algodão puro, perfeita para o dia a dia.',
                'tamanhos' => ['P', 'M', 'G', 'GG']
            ],
            [
                'id'    => 2,
                'nome'  => 'Calça Jeans',
                'preco' => 129.50,

                'imagens' => [
                    'calca-frente.jpg',
                    'calca-lado.jpg',
                ],
                'descricao' => 'Calça jeans com corte moderno e lavagem escura.',
                'tamanhos' => [38, 40, 42, 44]
            ],
            [
                'id'    => 3,
                'nome'  => 'Tênis Esportivo',
                'preco' => 249.99,
                'imagens' => [
                    'tenis-1.jpg',
                    'tenis-2.jpg',
                ],
                'descricao' => 'Tênis leve e confortável para suas atividades físicas.',
                'tamanhos' => [39, 40, 41, 42, 43]
            ]
        ];


        foreach ($produtos as $produto) {

            Produto::create($produto);
        }
    }
}
