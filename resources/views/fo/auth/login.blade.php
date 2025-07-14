@extends('layouts.auth')
@section('title', $title)

@section('form')
    <form method="POST" action="{{ $route }}" class="w-100 px-4" style="max-width: 380px;">
        @csrf

        <h1 class="mb-4 fw-bold text-white text-center">Bienvenue sur <span style="color: #8b5cf6;">Folium</span></h1>
        <p class="text-white text-center mb-4">Connecte-toi pour accéder à ton espace</p>

        <div class="mb-3">
            <label for="email" class="form-label text-light">Adresse email</label>
            <input type="email" name="email" id="email"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('email') is-invalid @enderror"
                required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label text-light">Mot de passe</label>
            <input type="password" name="password" id="password"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('password') is-invalid @enderror"
                required>
            @error('password')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn w-100 rounded-pill py-2 fw-semibold text-white"
            style="background: linear-gradient(to right, #3b82f6, #8b5cf6); border: none;">
            Se connecter
        </button>

        <p class="text-center mt-4 small text-white">
            Pas encore de compte ?
            <a href="{{ route('register') }}" class="text-decoration-underline text-white">Créer un compte</a>
        </p>
    </form>

@endsection
