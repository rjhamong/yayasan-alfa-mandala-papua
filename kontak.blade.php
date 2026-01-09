@extends('public.layouts.app')

@section('title','Kontak Kami')

@section('content')
<h2 class="mb-4">📍 Kontak Yayasan</h2>

<div class="row">
    <!-- INFO KONTAK -->
    <div class="col-md-5">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>Yayasan ALFA MANDALA PAPUA</h5>
                <p>
                    📍 Desa Dabolding, Distrik Kalomdol<br>
                    Pegunungan Bintang, Papua Pegunungan<br><br>

                    📧 Email: <br>
                    <strong>alfamandalapapua@gmail.com</strong><br><br>

                    📞 Telp / WhatsApp:<br>
                    <strong>08xxxxxxxxxx</strong>
                </p>
            </div>
        </div>
    </div>

    <!-- GOOGLE MAPS -->
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Lokasi Kami</h5>

                <!-- GOOGLE MAPS EMBED -->
                <iframe 
                    src="https://www.google.com/maps?q=Pegunungan%20Bintang%20Papua&output=embed"
                    width="100%" 
                    height="300" 
                    style="border:0;"
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
