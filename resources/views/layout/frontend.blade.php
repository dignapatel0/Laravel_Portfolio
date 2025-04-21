<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio | {{$title}}</title>

    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('app.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <script src="{{url('app.js')}}"></script>
</head>
<body class="bg-light">

    <header class="header-section">
        <div class="container">
            <h1 class="header-title">My Portfolio</h1>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer-section">
    <div class="container text-center">
        <p>&copy; {{date('Y')}} All rights reserved</p>
        <div class="footer-links d-flex justify-content-center align-items-center flex-wrap gap-3">
            <a href="#" class="footer-link mx-2">
                <i class="fab fa-github"></i> GitHub
            </a>
            <a href="#" class="footer-link mx-2">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            @if (Auth::check())
                <span class="mx-2">Logged in as {{auth()->user()->first}} {{auth()->user()->last}}</span>
                <a href="/console/logout" class="footer-link mx-2">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </a>
                <a href="/console/dashboard" class="footer-link mx-2">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            @else
                <a href="/console/login" class="footer-link mx-2">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            @endif
        </div>
    </div>
    </footer>


</body>
</html>
