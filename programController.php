<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->get();
        return view('program', compact('programs'));
    }
}
