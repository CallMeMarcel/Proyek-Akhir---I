<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class Photo extends Controller
{
    public function index()
    {
        $allGaleri = Galeri::all();
    
        return view('contact', compact('allGaleri'));
    }
}
