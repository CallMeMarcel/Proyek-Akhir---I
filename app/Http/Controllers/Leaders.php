<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
class Leaders extends Controller
{
    public function index()
    {
        $allPengurus = Pengurus::all();
    
        return view('leaders', compact('allPengurus'));
    }
}
