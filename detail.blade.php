@extends('public.layouts.app')

@section('title',$berita->judul)

@section('content')
<h2>{{ $berita->judul }}</h2>
<p>{{ $berita->isi }}</p>
@endsection
