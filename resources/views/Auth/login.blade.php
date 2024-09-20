@extends('layout.shared')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Anmelden</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
