<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Yayasan ALFA MANDALA PAPUA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex">

    {{-- SIDEBAR --}}
    <div class="bg-dark text-white p-3" style="width: 240px; min-height: 100vh;">
        <h5 class="fw-bold text-center mb-4">ADMIN PANEL</h5>

        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link text-white {{ request()->is('admin/dashboard') ? 'fw-bold' : '' }}">
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    Program
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    Galeri
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    Berita
                </a>
            </li>
        </ul>

        <hr>

        {{-- LOGOUT --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger btn-sm w-100">Logout</button>
        </form>
    </div>

    {{-- CONTENT --}}
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>

</div>

</body>
</html>
