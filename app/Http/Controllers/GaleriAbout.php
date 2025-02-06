<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriAbout extends Controller
{
    public function index()
    {
        
        $latestGaleri = Galeri::latest()->take(6)->get();

        
        if ($latestGaleri->count() > 4) {
            $oldestGaleri = Galeri::oldest()->first();
            $oldestGaleri->delete();
        }

        
        $allGaleri = Galeri::latest()->take(4)->get();
    
        return view('/about', compact('allGaleri'));
    }
}
