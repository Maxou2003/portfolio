@extends('layouts.auth')
@section('title', $title)

@section('form')
    <form method="POST" action="{{ $route }}" class="bg-body-tertiary text-dark shadow rounded-4 p-5 w-100 mx-4"
        style="max-width: 420px;">
        @csrf

        <h1 class="mb-4 fw-bold text-center">Bienvenue</h1>
        <p class="text-muted text-center mb-4">Connecte-toi pour accéder à ton espace</p>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" name="email" id="email"
                class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror" required
                value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback ms-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" id="name"
                class="form-control rounded-pill px-4 py-2 @error('name') is-invalid @enderror" required
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback ms-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password"
                class="form-control rounded-pill px-4 py-2 @error('password') is-invalid @enderror" required>
            @error('password')
                <div class="invalid-feedback ms-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="confirm-password" class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="confirm-password" id="confirm-password"
                class="form-control rounded-pill px-4 py-2 @error('confirm-password') is-invalid @enderror" required>
            @error('confirm-password')
                <div class="invalid-feedback ms-2">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold">
            S'inscrire
        </button>

        <p class="text-center mt-4 small text-muted">
            Vous avez déjà un compte ? <a href="{{ route('login') }}"> Se connecter </a>
        </p>
    </form>
@endsection
