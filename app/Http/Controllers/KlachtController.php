<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klacht;

use Illuminate\Support\Facades\Log;

class KlachtController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Valideer de invoer
        $data = $request->validate([
            'naam' => 'required',
            'email' => 'required|email',
            'klacht' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'foto' => 'required|image',
        ]);

//        // Verwerk de foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalName();
//            dd($request->file('foto'));

            // Probeer de afbeelding op te slaan
            $image->storeAs('images/', $imageName, 'public');

            // Voeg de bestandsnaam van de foto toe aan de $data-array
            $data['foto'] = $imageName;
            // Handmatig de klacht aanmaken en opslaan
            Klacht::create($data);

        }

//         Redirect naar de welkomstpagina met een succesmelding
        return view("klacht_ingediend", compact('data'));
    }
}

