<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class Event extends Controller
{
    public function index()
    {
        $allBerita = Berita::all();
    
        return view('events', compact('allBerita'));
    }
}
