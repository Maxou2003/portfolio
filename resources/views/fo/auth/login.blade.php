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
            <input type="email" name="email" id="email" class="form-control rounded-pill px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control rounded-pill px-4 py-2" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold">
            Se connecter
        </button>

        <p class="text-center mt-4 small text-muted">
            Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a>
        </p>
    </form>
@endsection
