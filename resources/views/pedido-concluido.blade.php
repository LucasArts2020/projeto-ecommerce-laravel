@extends('layouts.app')

@section('title', 'Pedido Concluído! - LaraStore')

@section('content')

    <div class="bg-white p-12 rounded-lg shadow-md max-w-2xl mx-auto text-center">

        <h1 class="text-4xl font-bold text-green-500 mb-6">
            Obrigado pela sua compra!
        </h1>

        <p class="text-xl text-gray-700 mb-8">
            Seu pedido foi processado com sucesso (isto é uma simulação).
        </p>

        <a href="/produtos" class="inline-block bg-blue-500 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-600">
            Continuar Comprando
        </a>
    </div>

@endsection
