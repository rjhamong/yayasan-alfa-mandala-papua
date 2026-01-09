<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $file = $request->foto;
        $namaFile = time().'.'.$file->extension();
        $file->move(public_path('uploads/galeri'), $namaFile);

        Galeri::create([
            'judul' => $request->judul,
            'foto' => $namaFile
        ]);

        return redirect('/admin/galeri')->with('success','Foto berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('foto')) {
            unlink(public_path('uploads/galeri/'.$galeri->foto));

            $file = $request->foto;
            $namaFile = time().'.'.$file->extension();
            $file->move(public_path('uploads/galeri'), $namaFile);

            $galeri->foto = $namaFile;
        }

        $galeri->judul = $request->judul;
        $galeri->save();

        return redirect('/admin/galeri')->with('success','Galeri diupdate');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        unlink(public_path('uploads/galeri/'.$galeri->foto));
        $galeri->delete();

        return back()->with('success','Galeri dihapus');
    }
}
