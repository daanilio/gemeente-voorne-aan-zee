@extends('layout')

@section('title', 'VaZ klachten-applicatie')

@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col space-y-8">
            <div class="bg-white shadow-lg p-4">
                <p class="text-2xl md:text-3xl font-bold">Gemeente VaZ klachten-applicatie</p>
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
            <div class="bg-white shadow-lg p-4">
                <form method="post" action="{{ route('klacht.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="naam">
                            Naam:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="naam" name="naam" type="text" placeholder="Uw voor- en achternaam">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Uw email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="klacht">
                            Omschrijving klacht:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-24"
                            id="klacht" name="klacht" placeholder="Omschrijf uw klacht"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="locatie">
                            Locatie:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="locatie" name="locatie" type="text" placeholder="Selecteer locatie">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                            Foto toevoegen:
                        </label>
                        <div
                            class="flex items-center justify-between border rounded py-2 px-3 bg-white shadow-sm">
                            <input
                                class="appearance-none outline-none w-full text-gray-700 mr-3 py-1"
                                id="foto" name="foto" type="file" accept="image/*">
                            {{--                            <button class="bg-gray-400 hover:bg-gray-600 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">--}}
                            {{--                                Uploaden--}}
                            {{--                            </button>--}}
                        </div>
                    </div>
                    <div class="mb-6 hidden">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="datum">
                            Datum:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="datum" name="datum" type="text" placeholder="Huidige datum" readonly
                            value="{{date('d-m-Y')}}">
                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Verstuur klacht
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
