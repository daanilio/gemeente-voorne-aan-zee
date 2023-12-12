<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Voeg Tailwind CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- OPS script -->
    <script src="@yield('osm-link')" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styling -->
    <style>
        @yield('styling')
    </style>
</head>

<body class="bg-gray-100 flex justify-between flex-col h-screen">

<!-- Header -->
<header class="py-3 border-b-2 border-gray bg-white px-4 md:px-20">
    <div class="md:flex md:justify-between md:items-center text-black">
        <img class="mx-auto p-2 w-48 md:w-52 px-2 md:px-4" alt="Logo van VaZ" src="{{ URL('img/logo_vaz_text.png') }}">

        <nav class="lg:flex md:pt-0 pt-2 md:flex-grow md:justify-center md:items-center md:pb-0 pb-3">
            <ul class="flex flex-row md:flex-row justify-center md:space-x-8 md:text-lg">
                <li><a href="{{ route('index') }}" class="p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Hoofdpagina</a></li>
                <li><a href="#" class="p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Klacht indienen</a></li>
            </ul>
        </nav>
        <div class="flex justify-center text-center md:block">
            <ul class="flex flex-row md:flex-row md:space-x-8 md:text-lg">
                <li><a href="{{ route('medewerker') }}" class="p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Medewerker</a></li>
                <li><a href="#" class="p-2 transition duration-300 border-b-2 border-transparent hover:border-gray-500">Inloggen</a></li>
            </ul>
        </div>

    </div>
</header>

<main class="bg-gray-100 p-10 md:p-20 lg:p-20">
    @yield('content')
</main>

<!-- Footer -->
<footer class="px-4 md:px-20 bg-white py-2 bottom-0 relative border-t-2 text-gray-500">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="mb-2 md:mb-0 text-center"><strong>Gemeente Voorne aan Zee</strong> <br class="md:hidden">klachten-applicatie</p>
        <div class="flex items-center space-x-4 md:ml-4">
            <p class="text-l md:text-base mb-2 md:mb-0">Liever bellen? 06-12345678.</p>
            <img src="{{ URL('img/logo_vaz.png') }}" alt="Foto van Voorne aan Zee" class="h-8 md:h-12 max-w-full">
        </div>
    </div>
</footer>

</body>
</html>
