<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * Informa ao Laravel quais campos podem ser preenchidos
     * em massa (usamos isso no Seeder).
     */
    protected $guarded = [];

    /**
     * A MÁGICA!
     * Informa ao Laravel para sempre converter a coluna 'imagens'
     * de JSON (texto) para um array PHP (e vice-versa).
     */
    protected $casts = [
        'imagens' => 'array',
        'tamanhos' => 'array',
    ];
}
