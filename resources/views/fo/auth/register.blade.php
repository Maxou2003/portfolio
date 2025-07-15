@extends('layouts.auth')

@section('title', $title)

@section('form')

    <form method="POST" action="{{ $route }}" class="w-100" style="max-width: 380px;">
        @csrf

        <h1 class="mb-4 fw-bold text-white text-center">Bienvenue sur <span class="text-primary">Folium</span></h1>
        <p class="text-white text-center mb-4">Crée ton portfolio en quelques clics</p>

        <div class="mb-3">
            <label for="email" class="form-label text-light">Adresse email</label>
            <input type="email" name="email" id="email"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('email') is-invalid @enderror"
                required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label text-light">Nom</label>
            <input type="text" name="name" id="name"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('name') is-invalid @enderror"
                required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label text-light">Mot de passe</label>
            <input type="password" name="password" id="password"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('password') is-invalid @enderror"
                required>
            @error('password')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="confirm-password" class="form-label text-light">Confirmer le mot de passe</label>
            <input type="password" name="confirm-password" id="confirm-password"
                class="form-control bg-transparent text-white border border-secondary rounded-pill px-4 py-2 @error('confirm-password') is-invalid @enderror"
                required>
            @error('confirm-password')
                <div class="invalid-feedback ms-2">{{ $message }}</div>
            @enderror
        </div>

        @include('fo.components.form-btn', ['buttonText' => ' S\'inscrire'])

        <p class="text-center mt-4 small text-white">
            Déjà inscrit ? <a href="{{ route('login') }}" class="text-decoration-underline text-secondary">Se
                connecter</a>
        </p>
    </form>

@endsection
