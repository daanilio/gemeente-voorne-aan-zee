@extends('layout')

@section('title', 'Klacht ingediend')

@section('content')

    <section class="grid grid-cols-2 md:grid-cols-2 md:grid-rows-3 gap-8">
        <div class="w-full text-m col-span-2 md:w-auto md:text-3xl text-center">
            <span class="bg-white shadow-lg p-4 font-bold md:font-normal lg:font-normal whitespace-nowrap">Uw klacht is succesvol ingediend.</span>
        </div>

        {{--        Hier komt een samenvatting van de klacht --}}
        <div class="bg-white shadow-lg p-4 row-start-2 col-start-1 col-span-2 md:col-span-1 lg:col-span-1">
            <div class="lg:text-xl md:text-xl font-bold mb-2">Uw informatie</div>
            <p><span class="font-bold">Naam:</span> {{ $data['naam'] }}</p>
            <p><span class="font-bold">Email:</span> {{ $data['email'] }}</p>
            <p><span class="font-bold">Adres klacht:</span><span id="adres"></span></p>
        </div>
        <div class="bg-white shadow-lg p-4 row-start-3 md:col-span-1 lg:col-span-1 col-span-2">
            <div class="lg:text-xl md:text-xl font-bold mb-2">Ingediende klacht</div>
            <p>{{ $data['klacht'] }}</p>
        </div>
        <div class="bg-white shadow-lg p-4 lg:row-start-2 md:row-start-2 row-span-1 md:row-span-2 md:col-start-2 lg:col-start-2 col-span-2 md:col-span-1 lg:col-span-1">
            <div class="lg:text-xl md:text-xl font-bold mb-2 text-center">Bijgevoegde foto</div>
            <img src="{{ asset('storage/images/'.$data['foto']) }}" alt="Foto van klacht"
                 class="w-96 h-auto flex mx-auto">
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
