@extends('layouts.base')
@section('title', $title)
@section('includes')
    @yield('includes')
@endsection


@section('navbar')
    <nav>
        <div class="logo">Maxence<span class="text-secondary">.dev</span></div>
        <ul class="align-items-center">
            <li><a href="#about">À propos</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('folio.create') }}"><button class="btn btn-primary text-secondary">
                        Créer un folio</button> </a></li>
        </ul>
    </nav>
@endsection
@section('content')

    @yield('content')
@endsection

@section('footer')
    <footer>
        &copy; 2025 Maxence Martin – Tous droits réservés
    </footer>
@endsection
