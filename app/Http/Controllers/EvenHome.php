<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class EvenHome extends Controller
{
    public function index()
    {
        
        $latestBerita = Berita::latest()->take(6)->get();

        
        if ($latestBerita->count() > 6) {
            $oldestBerita = Berita::oldest()->first();
            $oldestBerita->delete();
        }

        
        $allBerita = Berita::latest()->take(6)->get();
    
        return view('/home', compact('allBerita'));
    }
}
