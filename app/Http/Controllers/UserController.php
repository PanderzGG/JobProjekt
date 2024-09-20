<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Zeigt das Profil des Benutzers
        return view('user.profile');
    }

    public function myJobs()
    {
        // Zeigt die vom Benutzer erstellten Jobs an
        $jobs = auth()->user()->jobs;
        return view('user.my-jobs', compact('jobs'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->input('password')),
        ]);
        return view('user.profile');
    }
}
