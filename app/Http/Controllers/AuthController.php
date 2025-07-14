<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function showLoginForm()
    {
        return view('fo.auth.form', [
            'title' => 'Connexion - Mon folio builder',
            'route' => route('login.submit'),
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Connexion réussie.');
        }

        return back()->with('error', 'Identifiants invalides.')
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Identifiants invalides.']);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Déconnecté avec succès.');
    }

    public function showRegistrationForm()
    {
        return view('fo.auth.form', [
            'title' => 'Inscription - Mon folio builder',
            'route' => route('register.submit'),
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home')->with('success', 'Inscription réussie.');
    }
}
