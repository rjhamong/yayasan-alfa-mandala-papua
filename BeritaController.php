<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'ringkasan' => 'nullable',
            'konten' => 'required',
            'gambar' => 'nullable|image',
        ]);

        $data['slug'] = Str::slug($request->judul);
        $data['meta_title'] = $request->judul;
        $data['meta_description'] = Str::limit(strip_tags($request->konten), 150);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);
        return redirect()->route('admin.berita.index')->with('success', 'Berita ditambahkan');
    }
}
