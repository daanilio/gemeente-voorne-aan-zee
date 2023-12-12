@extends('layout')

{{--Voeg titel toe--}}
@section('title', 'Gemeente Voorne aan Zee')

{{--Maakt gebruikt van layout.blade--}}
@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col space-y-8">
            <div class="bg-white shadow-lg p-4">
                <p class="text-2xl md:text-3xl font-bold">Gemeente Voorne aan Zee</p>
                <br>
                <p class="text-base md:text-m">Beste burger, u bevindt zich op de klachten-applicatie van Gemeente
                    Voorne aan
                    Zee.<br>
                    Wilt u een klacht indienen? Dan kan dat hier.<br>
                    Wij gaan zo snel mogelijk aan de slag met uw klacht, alvast bedankt voor het indienen.</p>
            </div>
            <!-- Afbeelding -->
            <div class="relative overflow-hidden shadow-lg">
                <img src="{{ URL('img/vaz_strand.jpg') }}" alt="Foto van Voorne aan Zee"
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Formulier -->
        <div class="w-full md:w-auto">
            <div class="bg-white shadow-lg p-4" id="formSection">
                <form method="post" action="{{ route('klacht.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="naam">
                            Naam:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="naam" name="naam" type="text" placeholder="Uw voor- en achternaam">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="email">
                            Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Uw email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="klacht">
                            Omschrijving klacht:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-24"
                            id="klacht" name="klacht" placeholder="Omschrijf uw klacht"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="foto">
                            Foto toevoegen:
                        </label>
                        <div
                            class="flex items-center justify-between border rounded py-2 px-3 bg-white shadow-sm">
                            <input
                                class="appearance-none outline-none w-full text-gray-700 mr-3 py-1"
                                id="foto" name="foto" type="file" accept="image/*"></div>
                    </div>
                    <div class="mb-6 hidden">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="lat">
                            Latitude:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="lat" name="lat" type="text" placeholder="lat">
                    </div>
                    <div class="mb-6 hidden">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="long">
                            Longitude:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="long" name="long" type="text" placeholder="long">
                    </div>

                    <p class="text-red-500 hidden text-center pb-2" id="errorText">Je locatie is verplicht om een klacht in te
                        dienen.</p>

                    <div class="flex items-center justify-center">
                        <button id="submitBtn"
                                class="md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            Verstuur klacht
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                displayError();
            }
        }

        function showPosition(position) {
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;

            // Toon breedtegraad en lengtegraad in de console
            console.log("Breedtegraad: " + latitude);
            console.log("Lengtegraad: " + longitude);

            // Toon breedtegraad en lengtegraad in de inputvelden
            document.getElementById("lat").value = latitude;
            document.getElementById("long").value = longitude;

            // Schakel verzendknop in
            document.getElementById("submitBtn").removeAttribute("disabled");
            // Verberg de foutmelding als locatie is verkregen
            document.getElementById("errorText").classList.add("hidden");
        }

        function showError(error) {
            displayError();
        }

        function displayError() {
            // Verberg de verzendknop als er geen locatie is
            document.getElementById("submitBtn").setAttribute("disabled", true);
            // Toon de foutmelding
            document.getElementById("errorText").classList.remove("hidden");
        }

        // Roep getLocation() aan zodra de pagina is geladen
        window.onload = getLocation;
    </script>

@endsection
