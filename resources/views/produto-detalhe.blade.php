@extends('layouts.app')

@section('title', $produto['nome'])

@section('content')

    <a href="/produtos" class="inline-block mb-6 text-blue-500 hover:underline">
        &larr; Voltar para a lista de produtos
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <div class="grid grid-cols-2 gap-4">

            @foreach ($produto->imagens as $imagem)
                <div class="bg-gray-100 rounded-lg">

                    <img src="{{ asset('storage/'. $imagem) }}"
                         alt="Imagem do {{ $produto->nome }}"
                         class="w-full h-auto object-cover rounded-lg">
                </div>
            @endforeach
        </div>

        <div class="flex flex-col">

            <h1 class="text-4xl font-bold text-gray-900 mb-2">
                {{ $produto['nome'] }}
            </h1>

            <p class="text-3xl text-gray-800 font-medium mb-6">
                R$ {{ number_format($produto['preco'], 2, ',', '.') }}
            </p>

            <h3 class="text-lg font-bold text-gray-900 mb-2">Descrição</h3>
            <p class="text-gray-700 text-base mb-8">
                {{ $produto['descricao'] }}
            </p>

            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Tamanho</h3>


                <div class="grid grid-cols-5 gap-3">
                    @foreach ($produto['tamanhos'] as $tamanho)
                        <button class="border border-gray-300 rounded-md py-3 px-4 text-center text-gray-800 hover:border-black focus:border-black focus:outline-none">
                            {{ $tamanho }}
                        </button>
                    @endforeach
                </div>
            </div>


            <form action="{{ route('carrinho.adicionar', $produto->id) }}" method="POST">

                @csrf

                <button type="submit" class="w-full bg-black text-white text-center py-4 rounded-lg font-medium text-lg hover:bg-gray-800">
                Adicionar ao Carrinho
                </button>
            </form>

        </div>

    </div>

@endsection
