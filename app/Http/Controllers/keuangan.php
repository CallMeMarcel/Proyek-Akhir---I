<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class keuangan extends Controller
{
    public function index()
    {
        $allPayment = Payment::all();

        return view('keuangan', compact('allPayment'));
    }
}
