<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->get();
        return view('admin.program.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Program::create($request->all());

        return redirect('/admin/program')->with('success', 'Program berhasil ditambahkan');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $program->update($request->all());

        return redirect('/admin/program')->with('success', 'Program berhasil diupdate');
    }

    public function destroy($id)
    {
        Program::findOrFail($id)->delete();
        return back()->with('success', 'Program berhasil dihapus');
    }
}
