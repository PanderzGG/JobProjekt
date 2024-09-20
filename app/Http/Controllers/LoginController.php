<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Zeigt das Login-Formular an
    public function showLoginForm()
    {
        return view('auth.login'); // Zeigt die Blade-Vorlage für das Login-Formular
    }

    // Verarbeitet die Login-Anfrage
    public function login(Request $request)
    {
        // Validierung der Login-Daten
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        // Authentifizierung
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Wenn erfolgreich, leite auf die Profilseite weiter
            return redirect()->intended('profile')->with('success', 'Erfolgreich eingeloggt!');
        }
        dd($request->all());
        // Bei Fehlern zurück zur Login-Seite
        return back()->withErrors([
            'email' => 'Die angegebenen Anmeldedaten sind ungültig.',
        ]);
    }

    // Loggt den Benutzer aus
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Erfolgreich ausgeloggt!');
    }
}
