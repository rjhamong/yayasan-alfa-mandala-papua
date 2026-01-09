<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <!-- BOOTSTRAP 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="text-center mb-4">
    <img src="{{ asset('images/LOGO YAYASAN.png') }}" alt="Logo Yayasan"
         width="120">
    <h5 class="mt-2">Yayasan Alfa Mandala Papua</h5>
</div>
        {{-- CARD LOGIN --}}
        <div class="card shadow-sm mx-auto" style="width: 360px;">
            <div class="card-header bg-primary text-white text-center">
                <strong>Login Admin</strong>
            </div>

            <div class="card-body text-start">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <button class="btn btn-primary w-100">
                        Login
                    </button>
                </form>
            </div>

            <div class="card-footer text-center small text-muted">
                © {{ date('Y') }} Yayasan Alfa Mandala Papua
            </div>
        </div>

    </div>
</div>


</body>
</html>
