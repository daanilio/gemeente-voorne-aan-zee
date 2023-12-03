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

<body class="bg-gray-100">
<!-- Header -->
<header class="bg-white-500 text-white py-4 border border-b-2 border-gray bg-white">
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

<section class="p-20">
    <!-- Afbeelding -->
    <div class="relative overflow-hidden">
        <img src="{{ URL('img/vaz_strand.jpg') }}" alt="Foto van Voorne aan Zee" class="w-full h-auto rounded-lg" style="height: 500px">
        <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-30 bg-white text-white p-4 rounded">
            <p class="text-4xl">Gemeente Voorne aan Zee</p>
        </div>
        <svg class="absolute bottom-0 w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#F3F4F6"
                  d="M0,192L48,202.7C96,213,192,235,288,213.3C384,192,480,128,576,112C672,96,768,128,864,160C960,192,1056,224,1152,213.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>


    <!-- Formulier -->
    <div class="w-full flex justify-center py-12">
        <section class="container mx-auto flex justify-between w-3/4 bg-gray-100">
            <div class="w-full md:w-1/2 p-4 mt-[-2rem] bg-white rounded-lg mr-8 border-gray-400 border-2">
                <h2 class="font-bold text-2xl">Een klacht indienen</h2>
                <br>
                <p>Als u een klacht wilt indienen kan dat via dit formulier.
                    <br>
                    Uw informatie wordt niet opgeslagen of verstuurd. Het invullen is dus anoniem.
                    <br><br>
                    Mocht u een klacht willen invullen met uw naam erbij, kan dat. Log dan in en verstuur vervolgens een
                    klacht via 'klacht indienen'.
                </p>

            </div>
            <div class="w-full md:w-1/2 p-4 mt-[-2rem] bg-white rounded-lg ml-8 border-gray-400 border-2">
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 " for="klacht">
                            Omschrijving klacht:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="klacht" type="text" placeholder="Omschrijf klacht">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="locatie">
                            Locatie:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="locatie" type="email" placeholder="Selecteer locatie">
                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="w-full md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Verstuur klacht
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white py-4 bottom-0 relative border border-t">
    <div class="container mx-auto text-center">
        <!-- Voeg footer-inhoud toe -->
    </div>
</footer>

</body>
</html>
