<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = User::create(request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'min:5', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:7', 'max:255'],
        ]));

        auth()->login($user);

        return redirect(route('index'));
    }
}
