@extends('layouts.app')

@section('title', 'Finalizar Compra - LaraStore')

@section('content')

    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">

        <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">
            Finalizar Compra
        </h1>

        <form action="{{ route('checkout.processar') }}" method="POST">
            @csrf

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Seus Dados</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="nome" class="block text-lg font-medium text-gray-700 mb-2">Nome Completo</label>
                    <input type="text" id="nome" name="nome" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                </div>
                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">E-mail</label>
                    <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                </div>
            </div>

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Endereço de Entrega</h2>

            <div class="mb-6">
                <label for="endereco" class="block text-lg font-medium text-gray-700 mb-2">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="Rua, Número, Bairro" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="cidade" class="block text-lg font-medium text-gray-700 mb-2">Cidade</label>
                    <input type="text" id="cidade" name="cidade" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                </div>
                <div>
                    <label for="cep" class="block text-lg font-medium text-gray-700 mb-2">Código Postal (CEP)</label>
                    <input type="text" id="cep" name="cep" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                </div>
            </div>

            <div class="mt-12 border-t pt-6">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-2xl font-medium text-gray-700">Total a Pagar:</span>
                    <span class="text-3xl font-bold text-gray-900">
                        R$ {{ number_format($total, 2, ',', '.') }}
                    </span>
                </div>

                <button type="submit" class="w-full bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-600">
                    Pagar Agora (Simulação)
                </button>
            </div>

        </form>
    </div>

@endsection
