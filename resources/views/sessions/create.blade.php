<form method="post" action="{{ route('sessions') }}">
    @csrf
    <label for="email">Email</label>
    <input type="text" id="email" name="email" autocomplete="email">

    <label for="password">Wachtwoord</label>
    <input type="password" id="password" name="password" autocomplete="new-password">

    <button type="submit">Log in</button>
</form>
