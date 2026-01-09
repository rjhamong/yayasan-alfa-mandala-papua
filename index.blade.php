@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Program</h4>
    <a href="/admin/program/create" class="btn btn-primary btn-sm">
        + Tambah Program
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($programs as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->judul }}</td>
            <td>
                <a href="/admin/program/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/admin/program/{{ $p->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
