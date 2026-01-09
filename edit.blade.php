<!DOCTYPE html>
<html>
<head>
    <title>Edit Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>✏️ Edit Program</h3>

    <form action="/admin/program/{{ $program->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul Program</label>
            <input type="text" name="judul" class="form-control" value="{{ $program->judul }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ $program->deskripsi }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/admin/program" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
