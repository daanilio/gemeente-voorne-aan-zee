@extends('layout')

{{--Voeg titel toe--}}
@section('title', 'Gemeente Voorne aan Zee')

{{--Maakt gebruikt van layout.blade--}}
@section('content')
    <section class="grid grid-cols-1 md:grid-cols-1 gap-8">
        <!-- Formulier -->
        <div class="w-full md:w-1/2 mx-auto">
            <div class="bg-white shadow-lg p-4" id="formSection">
                <form method="post" action="{{ route('registreer') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="name">
                            Naam:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" placeholder="Uw voor- en achternaam" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="email">
                            Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Uw email" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-l font-bold mb-2" for="password">
                            Wachtwoord:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" name="password" type="password" placeholder="Uw wachtwoord (moet bestaan uit minimaal 7 tekens)">
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center">
                        <button id="submitBtn"
                                class="md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            Maak uw account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
