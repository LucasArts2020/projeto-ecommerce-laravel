@extends('layouts.app')

@section('title', 'Meu Carrinho - LaraStore')

@section('content')

    <div class="bg-white p-8 rounded-lg shadow-md">

        <h1 class="text-4xl font-bold text-gray-900 mb-8">
            Meu Carrinho
        </h1>

        @forelse ($carrinhoItens as $id => $item)

            <div class="flex items-center justify-between border-b border-gray-200 py-4">
                <div class="flex items-center gap-6">
                    <img src="{{ asset('storage/'. $item['imagem']) }}"
                         alt="{{ $item['nome'] }}"
                         class="w-24 h-24 object-cover rounded-md">

                    <div>
                        <a href="/produto/{{ $id }}" class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                            {{ $item['nome'] }}
                        </a>
                        <p class="text-lg text-gray-700">
                            R$ {{ number_format($item['preco'], 2, ',', '.') }}
                        </p>
                    </div>
                </div>

                <div class="text-right">
                    <p class="text-lg font-medium">
                        Qtd: {{ $item['qtd'] }}
                    </p>
                    <p class="text-lg font-bold text-gray-900 mb-2">
                        Total: R$ {{ number_format($item['preco'] * $item['qtd'], 2, ',', '.') }}
                    </p>

                    <form action="{{ route('carrinho.remover', $id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-sm text-red-500 hover:text-red-700 hover:underline">
                            Remover
                        </button>
                    </form>
                </div>
            </div>

        @empty
        @endforelse

        @if (count($carrinhoItens) > 0)
            <div class="mt-8 text-right">
                <p class="text-3xl font-bold text-gray-900">
                    Total do Pedido: R$ {{ number_format($total, 2, ',', '.') }}
                </p>
                <a href="#" class="inline-block mt-6 bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-600">
                    Finalizar Compra
                </a>
            </div>
        @endif

    </div>

@endsection
