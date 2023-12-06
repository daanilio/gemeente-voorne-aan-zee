@extends('layout')

@section('title', 'Klacht ingediend')

@section('content')

    <section class="grid grid-cols-2 md:grid-cols-2 md:grid-rows-3 gap-8">
        <div class="w-full col-span-2 md:w-auto text-3xl text-center">
            <span class="bg-white shadow-lg p-4">Uw klacht is succesvol ingediend</span>
        </div>
        <div class="bg-white shadow-lg p-4 row-start-2 col-start-1">
            <div class="text-xl font-bold mb-2">Uw informatie:</div>
            <p><span class="font-bold">Naam:</span> {{ $data['naam'] }}</p>
            <p><span class="font-bold">Email:</span> {{ $data['email'] }}</p>
{{--            <p><span class="font-bold">Locatie:</span> {{ $data['locatie'] }}</p>--}}
        </div>
        <div class="bg-white shadow-lg p-4 row-start-3">
            <div class="text-xl font-bold mb-2">Ingediende klacht:</div>
            <p>{{ $data['klacht'] }}</p>
        </div>
        <div class="bg-white shadow-lg p-4 row-start-2 row-span-2 col-start-2">
            <div class="text-xl font-bold mb-2">Toegevoegde foto:</div>
            <img src="{{ asset('images/' . $data['foto']) }}" alt="Klacht foto" class="w-full h-auto">
        </div>
    </section>
@endsection
