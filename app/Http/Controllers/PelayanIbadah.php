<?php

namespace App\Http\Controllers;

use App\Models\Pelayan;
use Illuminate\Http\Request;

class PelayanIbadah extends Controller
{
    public function index()
    {
        $allPelayan = Pelayan::all();

        return view('pelayanibadah', compact('allPelayan'));
    }
}
