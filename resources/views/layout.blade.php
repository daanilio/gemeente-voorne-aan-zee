<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Voeg Tailwind CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
</head>

<body class="bg-gray-100 flex flex-col h-screen justify-between">

<!-- Header -->
<header class="py-3 border-b-2 border-gray bg-white px-4 md:px-20">
    <div class="md:flex md:justify-between md:items-center text-black">
        <img class="mx-auto p-2 w-48 md:w-52 px-2 md:px-4" alt="Logo van VaZ" src="{{ URL('img/logo_vaz_text.png') }}">
        <nav class="lg:flex md:pt-0 pt-2 flex-grow md:justify-center md:items-center">
            <ul class="flex space-x-8 justify-center md:justify-start">
                <li><a href="#"
                       class="text-lg md:text-xl p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Hoofdpagina</a>
                </li>
                <li><a href="#"
                       class="text-lg md:text-xl p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Klacht
                        indienen</a></li>
                <li class="md:hidden">
                    <a href="#"
                       class="text-lg md:text-xl p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Inloggen</a>
                </li>
            </ul>
        </nav>
        <div class="text-center hidden md:block">
            <ul>
                <li><a href="#"
                       class="text-lg md:text-xl p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Inloggen</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<main class="p-4 md:p-20">
    @yield('content')
</main>
<!-- Footer -->
<footer class="px-4 md:px-20 bg-white py-2 bottom-0 relative border-t-2 text-gray-500">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="mb-2 md:mb-0"><strong>Gemeente Voorne aan Zee</strong> klachten-applicatie</p>
        <div class="flex items-center space-x-4 md:ml-4">
            <p class="text-sm md:text-base mb-2 md:mb-0">Liever bellen? <a href="tel:06-12345678">06-12345678</a>.</p>
            <img src="{{ URL('img/logo_vaz.png') }}" alt="Foto van Voorne aan Zee" class="h-8 md:h-12 max-w-full">
        </div>
    </div>
</footer>

</body>
</html>
