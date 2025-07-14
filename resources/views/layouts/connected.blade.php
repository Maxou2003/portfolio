@extends('layouts.base')
@section('title')
    @yield('title')
@endsection
@section('includes')
    @yield('includes')
@endsection


@section('navbar')
    @include('fo.components.navbar')
@endsection
@section('content')
    @yield('content')
@endsection

@section('footer')
    <footer>
        &copy; 2025 Maxence Martin – Tous droits réservés
    </footer>
@endsection
