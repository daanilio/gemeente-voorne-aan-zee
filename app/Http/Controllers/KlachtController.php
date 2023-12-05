<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klacht;

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
            'locatie' => 'required',
            'foto' => 'required|image',
        ]);
//        // Verwerk de foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalName();

            // Verplaats de foto naar de juiste map
//            $image->move(public_path('images'), $imageName);
            $image->storeAs('images', $imageName, 'public');
            // Voeg de bestandsnaam van de foto toe aan de $data-array
            $data['foto'] = $imageName;

//        dd($request->all());
            // Handmatig de klacht aanmaken en opslaan
            Klacht::create($data);
        }

//         Redirect naar de welkomstpagina met een succesmelding
        return view("klacht_ingediend", compact('data'));
    }
}

