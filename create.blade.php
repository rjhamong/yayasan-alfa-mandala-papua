<!DOCTYPE html>
<html>
<head>
    <title>Tambah Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>➕ Tambah Program</h3>

    <form action="/admin/program" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul Program</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="/admin/program" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
