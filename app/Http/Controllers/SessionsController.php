<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! auth()->attempt($attributes)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Email en wachtwoord komen niet overeen.']);
        }

        session()->regenerate();

        return redirect(route('index'));
    }

    public function destroy()
    {
        auth()->logout();

        return redirect(route('index'));
    }
}
