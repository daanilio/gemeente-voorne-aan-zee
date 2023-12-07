@extends('layout')

@section('title', 'Dashboard')
@section('styling')
#map {
            height: 500px;
            width: 100%;
        }'
)
@endsection

@section('content')
    <div id="map"></div>

{{--    Laad open street map in --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map').setView([51.8833, 4.1167], 12); // Benaderde coördinaten voor Voorne aan Zee, zoomniveau 12

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);


            L.marker([51.8833, 4.1167]).addTo(map)
                .bindPopup('Hello, Voorne aan Zee!')
                .openPopup();
        });
    </script>

@endsection
