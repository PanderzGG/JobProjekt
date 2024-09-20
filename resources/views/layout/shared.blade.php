<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Standardtitel')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> <!-- Verlinkt das CSS-File Sollte wahrscheinlich an einem anderen Ort sein bevor es live geht. Todo.-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

    <header>
        <div class="header-content">
            <div class="navcontainer">
                <nav class="navbar">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <label class="logo">Stellenanzeigen24.de</label>
                    <ul>
                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'jobs.index' ? 'active' : '' }}">
                            <a href="{{ route('jobs.index') }}">Jobs</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'companies.index' ? 'active' : '' }}">
                            <a href="{{ route('companies.index') }}">Unternehmen</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'categories.index' ? 'active' : '' }}">
                            <a href="{{ route('categories.index') }}">Kategorien</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'user.profile' ? 'active' : '' }}">
                            @if (auth()->check())
                                <!-- Der Benutzer ist eingeloggt, linke zur Profilseite -->
                                <a href="{{ route('user.profile') }}">Profil</a>
                            @else
                                <!-- Der Benutzer ist nicht eingeloggt, leite zur Login-Seite -->
                                <a href="{{ route('login') }}">Login</a>
                            @endif
                        </li>
                        @if(auth()->check())
                            <!-- Logout-Button, sichtbar nur für eingeloggte Benutzer -->
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <div id="page-container">
        <div id="content-wrap">

            <main>
                @yield('content')
                {{-- Seiteninhalt kommt hier rein --}}
            </main>

        </div>
    </div>
    <footer id="footer">
        <div class="footer-content">
            <p>&copy; 2024 Stellenanzeigen App</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Verlinkt das JS-File -->
</body>
</html>
