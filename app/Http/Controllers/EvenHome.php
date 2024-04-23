<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class EvenHome extends Controller
{
    public function index()
    {
        $allBerita = Berita::all();
    
        return view('/home', compact('allBerita'));
    }
}
