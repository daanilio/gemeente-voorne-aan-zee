@extends('layout')
@section('title', 'Dashboard')
@section('styling')
    #map {height: 500px;width: 100%;}
    .leaflet-popup-content-wrapper {width: 300px;height: auto;max-height: 300px;overflow-y: none;
    }')
@endsection
@section('content')
    <?php

    use App\Models\Klacht;

    // Haal alle klachten op uit de database
    $klachtenData = Klacht::all();
    $klachten = [];

    // Vul de $klachten array met alle klachtgegevens uit de database
    foreach ($klachtenData as $klacht) {
        $klachten[] = [
            'id' => $klacht->id,
            'klacht' => $klacht->klacht,
            'lat' => $klacht->lat,
            'long' => $klacht->long,
            'foto' => $klacht->foto,
            'opgelost' => $klacht->opgelost,
        ];
    }
    ?>
    <div id="map"></div>

    {{--    Laad open street map in --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map').setView([51.8833, 4.1167], 14); // Coördinaten voor Voorne aan Zee, zoomniveau 14

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var customPopup = L.popup({maxWidth: 400, maxHeight: 400});

            // De foreach zorgt ervoor dat elke klacht wordt weergegeven als een pin
            @foreach($klachten as $klacht)
            customPopup.setContent("<b>Klacht id: </b>{{ $klacht['id'] }}<br><b>Klacht: </b>{{ $klacht['klacht'] }}<br><b>Opgelost: </b>{{ $klacht['opgelost'] }}<br><b>Foto: <img src='{{ asset('storage/images/') . '/' . $klacht['foto'] }}' alt='Foto van klacht'><br></b>");

            // Hier maken we de pop up aan
            L.marker([{{ $klacht['lat'] }}, {{ $klacht['long'] }}])
                .addTo(map)
                .bindPopup(customPopup);
            @endforeach
        });
    </script>
@endsection
