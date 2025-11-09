@extends('layouts.app')

@section('title', 'Página Inicial - LaraStore')

@section('content')
    <div class="relative bg-gray-900 text-white rounded-lg shadow-2xl overflow-hidden mb-16" style="height: 450px;">

        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=1600"
             alt="Promoção"
             class="absolute w-full h-full object-cover opacity-40">

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center p-8">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
                Promoção 25% OFF
            </h1>
            <p class="text-xl md:text-2xl font-light mb-8">
                Em todos os produtos da seção de padaria.
            </p>
            <a href="/produtos"
               class="inline-block bg-white text-gray-900 font-bold py-3 px-8 rounded-full text-lg
                      transition-transform duration-300 hover:scale-105">
                Comprar Agora
            </a>
        </div>
    </div>
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Comprar por Categoria
        </h2>

        <div class="grid grid-cols-3 md:grid-cols-6 gap-6 text-center">

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🍞</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Padaria</p>
            </a>

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🍎</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Frutas</p>
            </a>

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🥩</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Carnes</p>
            </a>

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🥦</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Vegetais</p>
            </a>

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🥤</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Bebidas</p>
            </a>

            <a href="#" class="group">
                <div class="p-6 bg-gray-100 rounded-full w-24 h-24 mx-auto flex items-center justify-center transition-all duration-300 group-hover:bg-blue-100">
                    <span class="text-4xl">🧀</span>
                </div>
                <p class="mt-4 font-semibold text-gray-700 group-hover:text-blue-600">Laticínios</p>
            </a>

        </div>
    </div>
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                Destaques
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($produtos as $produto)
                    <div class="bg-transparent rounded-lg overflow-hidden transition-all duration-300 group">

                        <a href="/produto/{{ $produto->id }}">
                            <div class="overflow-hidden rounded-lg border border-gray-200">
                                <img src="{{ $produto->imagens[0] }}"
                                     alt="{{ $produto->nome }}"
                                     class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                        </a>

                        <div class="py-4"> <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                {{ $produto->nome }}
                            </h3>
                            <p class="text-md font-bold text-blue-600">
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
@endsection
