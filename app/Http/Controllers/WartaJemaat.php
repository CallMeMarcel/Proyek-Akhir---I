<?php

namespace App\Http\Controllers;

use App\Models\Warta;
use Illuminate\Http\Request;

class WartaJemaat extends Controller
{
    public function index()
    {
        $allWarta = Warta::all();
    
        return view('wartajemaat', compact('allWarta'));
    }
}
