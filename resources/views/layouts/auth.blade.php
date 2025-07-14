@extends('layouts.base')

@section('title')
    @yield('title')
@endsection

@section('content')
    <div class="container-fluid vh-100 d-flex p-0">
        <!-- Partie gauche : formulaire -->
        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center px-5" style="background-color: #0f172a;">
            @yield('form')
        </div>

        <!-- Partie droite : image illustrée -->
        <div class="col-md-8 d-none d-md-block p-0">
            <img src="{{ asset('images/folio-side-image.png') }}" alt="Illustration création de portfolio"
                class="img-fluid h-100 w-100 object-fit-cover">
        </div>
    </div>
@endsection
