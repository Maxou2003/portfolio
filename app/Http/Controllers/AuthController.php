<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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

        return back()->with('error', 'Identifiants invalides.' . $credentials['email'] . ' ' . $credentials['password'])
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

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home')->with('success', 'Inscription réussie.');
    }
}
