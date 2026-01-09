<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Yayasan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold">ADMIN YAYASAN</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-light btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 bg-light min-vh-100 p-3">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/admin/dashboard">🏠 Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/admin/program">📘 Program</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/admin/galeri">🖼️ Galeri</a>
                </li>
            </ul>
        </div>

        <!-- CONTENT -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
