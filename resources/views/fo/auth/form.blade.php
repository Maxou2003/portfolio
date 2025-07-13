@extends('layouts.base')
@section('title', 'Connexion - Mon folio builder')

@section('content')
    <div class="container-fluid min-vh-100 d-flex p-0">
        <!-- Colonne gauche : formulaire -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-dark text-light">
            <form method="POST" action="{{ route('login.submit') }}"
                class="bg-body-tertiary text-dark shadow rounded-4 p-5 w-100 mx-4" style="max-width: 420px;">
                @csrf

                <h1 class="mb-4 fw-bold text-center">Bienvenue</h1>
                <p class="text-muted text-center mb-4">Connecte-toi pour accéder à ton espace</p>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" name="email" id="email" class="form-control rounded-pill px-4 py-2"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control rounded-pill px-4 py-2"
                        required>
                </div>

                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold">
                    Se connecter
                </button>

                <p class="text-center mt-4 small text-muted">
                    Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a>
                </p>
            </form>
        </div>

        <!-- Colonne droite : image -->
        <div class="col-6 d-none d-md-block p-0">
            <img src="{{ asset('images/Working-Man-Illustration.jpg') }}" alt="Image de connexion"
                class="img-fluid h-100 w-100 object-fit-cover">
        </div>
    </div>
@endsection
