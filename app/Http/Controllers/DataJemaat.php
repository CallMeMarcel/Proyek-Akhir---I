<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;

class DataJemaat extends Controller
{
    public function index()
    {
        $allJemaat = Jemaat::all();
    
        return view('jemaat', compact('allJemaat'));
    }
    
}
