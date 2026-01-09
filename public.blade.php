<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Yayasan Alfa Mandala Papua')</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- THEME WARNA TEKNOLOGI -->
    <style>
        body {
            background-color: #f4f8ff;
        }
        .navbar {
            background: linear-gradient(90deg, #0d47a1, #1976d2);
        }
        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }
        footer {
            background: #0d47a1;
            color: #fff;
        }
    </style>
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            ALFA MANDALA PAPUA
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('program') }}">Program</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                <li class="nav-item">
                    <a class="btn btn-light btn-sm text-primary" href="{{ url('/login') }}">
                        Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- CONTENT --}}
<main>
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="text-center py-3 mt-5">
    © 2026 Yayasan Alfa Mandala Papua
</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
