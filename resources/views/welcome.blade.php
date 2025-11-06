<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas Estilizadas</title>

    {{-- A linha abaixo é FUNDAMENTAL para que o Tailwind CSS funcione --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 text-white font-sans flex justify-center items-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-xl text-center">

    <h1 class="text-4xl font-bold text-gray-900 mb-4">
        Olá do arquivo 'welcome.blade.php'!
    </h1>

    <p class="text-xl text-gray-700">
        Esta é a versão simplificada e estilizada da página de boas-vindas.
    </p>

    <p class="text-sm text-gray-500 mt-4">
        (Lembre-se: No nosso projeto LaraStore, a rota principal usa 'home.blade.php')
    </p>
</div>

</body>
</html>
