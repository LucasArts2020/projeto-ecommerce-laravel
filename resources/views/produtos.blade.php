@extends('layouts.app')

@section('title', 'Nossos Produtos - LaraStore')

@section('content')

    <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">
        Nossos Produtos
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach ($produtos as $produto)

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl">

                <a href="/produto/{{ $produto['id'] }}">
                    <img src="{{ asset('storage/' . $produto['imagens'][0]) }}"
                         alt="{{ $produto['nome'] }}"
                         class="w-full h-56 object-cover">
                </a>

                <div class="p-4 text-center">

                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        {{ $produto['nome'] }}
                    </h3>

                    <div class="text-lg font-bold text-blue-600 mb-4">
                        R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                    </div>

                    <a href="/produto/{{ $produto['id'] }}" class="w-full bg-black text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-800 inline-block">
                        Adicionar ao Carrinho
                    </a>
                </div>
            </div>

        @endforeach

    </div>

@endsection
