<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Admin Dashboard</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-sm btn-light">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <div class="row g-4">

        <!-- PROGRAM -->
        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">📘 Program</h5>
                    <p class="card-text">Kelola program yayasan</p>
                    <a href="{{ url('/admin/program') }}" class="btn btn-primary btn-sm">
                        Kelola Program
                    </a>
                </div>
            </div>
        </div>

        <!-- GALERI -->
        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">🖼️ Galeri</h5>
                    <p class="card-text">Kelola foto & dokumentasi</p>
                    <a href="{{ url('/admin/galeri') }}" class="btn btn-success btn-sm">
                        Kelola Galeri
                    </a>
                </div>
            </div>
        </div> 

    </div>
</div>

</body>
</html>
