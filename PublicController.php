<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Galeri;
use App\Models\Berita;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function program()
    {
        $programs = Program::latest()->get();
        return view('program', compact('programs'));
    }

    public function galeri()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri', compact('galeris'));
    }

    public function berita()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('berita.index', compact('beritas'));
    }
}
