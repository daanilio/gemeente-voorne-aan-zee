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

    $recenteKlachten = Klacht::latest()->take(5)->get();
    $alleKlachten = Klacht::all();

    ?>
    <section class="grid grid-cols-3 gap-y-8 gap-x-8 flex-col">
        <div class="col-span-3" id="map"></div>

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

        <div class="bg-white col-span-2 shadow-lg p-4">
            <p class="text-2xl text-center">Alle klachten</p><br>
            <table class="p-2 border border-collapse">
                <thead>
                <tr class="border p-2">
                    <th class="border p-2">Klacht ID</th>
                    <th class="border p-2">Naam melder</th>
                    <th class="border p-2">Email melder</th>
                    <th class="border p-2">Klacht</th>
                    <th class="border p-2">Aangemaakt op</th>
                    <th colspan="2" class="border p-2">Beheren</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alleKlachten as $klacht)
                    <tr class="border p-2">
                        <td class="border p-2">{{ $klacht->id }}</td>
                        <td class="border p-2">{{ $klacht->naam }}</td>
                        <td class="border p-2">{{ $klacht->email }}</td>
                        <td class="border p-2">{{ $klacht->klacht }}</td>
                        <td class="border p-2">{{ $klacht->created_at->format('d-m-Y') }}</td>
                        <td class="border p-2 bg-green-500">Opgelost</td>
                        <td class="border p-2 bg-red-500">Verwijderen</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="bg-white shadow-lg p-4">
            <p class="text-2xl text-center">De vijf meest recente klachten</p><br>
            <table class="p-2 border border-collapse">
                <thead>
                <tr class="border p-2">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Naam melder</th>
                    <th class="border p-2">Klacht</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recenteKlachten as $klacht)
                    <tr class="border p-2">
                        <td class="border p-2">{{ $klacht->id }}</td>
                        <td class="border p-2">{{ $klacht->naam }}</td>
                        <td class="border p-2">{{ $klacht->klacht }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </section>
@endsection
