<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Yayasan ALFA MANDALA PAPUA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">ALFA MANDALA PAPUA</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active fw-bold' : '' }}" href="/tentang">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('visi-misi') ? 'active fw-bold' : '' }}" href="/visi-misi">
                        Visi & Misi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('program') ? 'active fw-bold' : '' }}" href="/program">
                        Program
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('galeri') ? 'active fw-bold' : '' }}" href="/galeri">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active fw-bold' : '' }}" href="/kontak">
                        Kontak
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} Yayasan ALFA MANDALA PAPUA
</footer>

</body>
</html>
