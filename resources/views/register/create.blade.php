<form method="post" action="{{ route('registreer') }}">
    @csrf
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" autocomplete="name">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" autocomplete="email">

    <label for="password">Wachtwoord</label>
    <input type="password" id="password" name="password" autocomplete="new-password">

    <button type="submit">Registreer</button>
</form>
