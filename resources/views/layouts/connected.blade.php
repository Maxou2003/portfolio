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
    <footer class="py-3 border-top-primary text-center mt-5">
        &copy; 2025 Maxence Martin – Tous droits réservés
    </footer>
@endsection
