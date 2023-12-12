@extends('layout')

{{--Voeg titel toe--}}
@section('title', 'Gemeente Voorne aan Zee')

{{--Maakt gebruikt van layout.blade--}}
@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white shadow-lg p-8">
                <p class="text-2xl md:text-3xl font-bold pb-4">Gemeente Voorne aan Zee klachten applicatie</p>
                <br>
                <p class="text-base md:text-m">
                    Beste burger, welkom bij de klachtenapplicatie van Gemeente Voorne aan Zee.<br><br>
                    Als onderdeel van ons voortdurende streven naar een betere gemeenschap, hebben we deze applicatie in
                    het leven geroepen om een open kanaal te bieden voor het melden van klachten en zorgen die u
                    mogelijk heeft.
                    <br>
                    Of het nu gaat om problemen met de openbare ruimte, zorgen over milieukwesties, of andere zaken die
                    uw aandacht vragen, we staan klaar om uw feedback te ontvangen.
                    <br><br>
                    Uw input is waardevol en kan anoniem worden ingediend als u dat wenst. Klik op 'Klacht indienen' om
                    uw klacht te melden of klik <a href="">hier</a>.
                </p>
        </div>

        <!-- Afbeelding -->
        <div class="relative overflow-hidden shadow-lg">
            <img src="{{ URL('img/vaz_strand.jpg') }}" alt="Foto van Voorne aan Zee"
                 class="w-full h-full object-cover">
        </div>
    </section>

@endsection
