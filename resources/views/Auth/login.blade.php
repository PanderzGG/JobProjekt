@extends('layout.shared')

@section('content')

<h1>Login</h1>
    <div class="login-container">
        <div class="loginform">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div>
                    <label for="email">E-Mail-Adresse</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password">Passwort</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Erfolgsmeldungen -->
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <!-- Fehlernachrichten -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
