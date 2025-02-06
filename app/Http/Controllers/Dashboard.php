<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Jemaat;
use App\Models\Pengurus;
use App\Models\Payment;
use App\Models\Warta;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
        {
            $allJemaat = Jemaat::all();
            $allPengurus = Pengurus::all();
            $allPayment = Payment::all();
            $allWarta = Warta::all();
            $allBerita = Berita::all();
            
        
            return view('dashboard', compact('allJemaat', 'allPengurus', 'allPayment', 'allWarta' , 'allBerita'));
        }
}
