<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="{{ Auth::user()->dark_mode ? 'dark' : 'light' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @yield('includes')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x z-1050 d-flex align-items-center gap-2 shadow-sm rounded-3 px-4 py-3 mt-3"
            role="alert" style="min-width: 300px;">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x z-1050 d-flex align-items-center gap-2 shadow-sm rounded-3 px-4 py-3 mt-3"
            role="alert" style="min-width: 300px;">
            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
            <div>{{ session('error') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif


    @yield('navbar')
    @yield('content')
    @yield('footer')
</body>

</html>
