<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaraStore')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white text-gray-800 font-sans">

<header class="bg-white shadow-md">
    <nav class="container mx-auto p-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-blue-600">LaraStore</a>

        <div class="flex gap-6">
            <a href="/" class="text-gray-700 hover:text-blue-500">Home</a>
            <a href="/produtos" class="text-gray-700 hover:text-blue-500">Produtos</a>
            <a href="/carrinho" class="text-gray-700 hover:text-blue-500">Carrinho</a>
        </div>
    </nav>
</header>

<main class="container mx-auto p-4 my-8">

    @yield('content')

</main>

</body>
</html>
