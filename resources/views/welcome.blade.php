<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voorne aan Zee</title>

    <!-- Voeg Tailwind CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

</head>
<body class="flex min-h-screen justify-between flex-col bg-gray-100">

<!-- Header -->
<header class="bg-white-500 text-white py-4 border border-b ">
    <div class="container mx-auto flex justify-between items-center px-4 text-black px-96">
        <img class="w-52 px-4" alt="Logo van VaZ" src="{{ URL('img/logo_vaz.png') }}">
        <nav class="hidden lg:block">
            <ul class="flex space-x-16">
                <li><a href="#" class="text-xl hover:bg-blue-900 hover:text-white p-2">Home</a></li>
                <li><a href="#" class="text-xl hover:bg-blue-900 hover:text-white p-2">Klacht indienen</a></li>
                <li><a href="#" class="text-xl hover:bg-blue-900 hover:text-white p-2">Inloggen</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hoofdsectie -->
<section class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="p-4">
            <h2 class="text-2xl font-bold mb-2">Welkom bij Voorne aan Zee</h2>
            <p>Ontdek onze prachtige stranden en geniet van de natuurlijke schoonheid van Voorne aan Zee.</p>
        </div>
        <!-- Voeg meer inhoud toe, zoals afbeeldingen, tekstblokken, enzovoort -->
    </div>

</section>

<!-- Footer -->
<footer class="bg-gray-100 py-4 bottom-0 relative border border-t">
    <div class="container mx-auto text-center">
        <!-- Voeg footer-inhoud toe -->
    </div>
</footer>

</body>

</html>
