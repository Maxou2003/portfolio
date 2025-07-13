<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    @yield('includes')
    @vite(['resources/scss/app.scss', 'resources/js/editor-init.js'])
</head>

<body>
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
    @yield('content')
</body>

<footer>
    &copy; 2025 Maxence Martin – Tous droits réservés
</footer>

</html>
