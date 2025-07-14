@extends('layouts.base')
@section('title')
    @yield('title')
@endsection

@section('content')
    <div class="container-fluid min-vh-100 d-flex p-0">
        <!-- Colonne gauche : formulaire -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-dark text-light">
            @yield('form')
        </div>

        <!-- Colonne droite : image -->
        <div class="col-6 d-none d-md-block p-0">
            <img src="{{ asset('images/Working-Man-Illustration.jpg') }}" alt="Image de connexion"
                class="img-fluid h-100 w-100 object-fit-cover">
        </div>
    </div>
@endsection
