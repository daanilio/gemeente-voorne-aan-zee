@extends('layout')

@section('title', 'Klacht ingediend')

@section('content')

    <section class="grid grid-cols-2 md:grid-cols-2 md:grid-rows-3 gap-8">
        <div class="w-full col-span-2 md:w-auto text-3xl text-center">
            <span class="bg-white shadow-lg p-4">Uw klacht is succesvol ingediend.</span>
        </div>

{{--        Hier komt een samenvatting van de klacht --}}
        <div class="bg-white shadow-lg p-4 row-start-2 col-start-1">
            <div class="text-xl font-bold mb-2">Uw informatie</div>
            <p><span class="font-bold">Naam:</span> {{ $data['naam'] }}</p>
            <p><span class="font-bold">Email:</span> {{ $data['email'] }}</p>
            <p><span class="font-bold">Adres klacht:</span><span id="adres"></span> </p>
        </div>
        <div class="bg-white shadow-lg p-4 row-start-3">
            <div class="text-xl font-bold mb-2">Ingediende klacht</div>
            <p>{{ $data['klacht'] }}</p>
        </div>
        <div class="bg-white shadow-lg p-4 row-start-2 row-span-2 col-start-2">
            <div class="text-xl font-bold mb-2 text-center">Bijgevoegde foto</div>
            <img src="{{ asset('storage/images/'.$data['foto']) }}" alt="Klacht foto" class="w-48 h-auto flex mx-auto">
        </div>
    </section>

{{--    Haal de straat op dmv de coordinaten--}}
    <script>
        let latitude = {{$data['lat']}};
        let longitude = {{$data['long']}};

        fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
            .then(response => response.json())
            .then(data => {
                // console.log(data);
                document.getElementById('adres').innerHTML = ` ${data.address.road}`;
            })
            .catch(error => console.error('Er is een fout opgetreden:', error));
    </script>

@endsection
