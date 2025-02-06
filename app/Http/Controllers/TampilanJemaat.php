<?php

namespace App\Http\Controllers;
use App\Models\jemaat;
use App\Models\keluarga;
use Illuminate\Http\Request;

class TampilanJemaat extends Controller
{
    public function index()
    {
        $data = datajemaat::all();
    return view('datajemaat', compact('data'));

    }
        // public function search(Request $request)
        // {
        //     $search = $request->query('search');
        //     $data = datajemaat::where('nama', 'like', "%{$search}%")
        //         ->orWhere('alamat', 'like', "%{$search}%")
        //         ->paginate(10);
        //     return view('tampilan.datajemaat', compact('data', 'search'));
        // }

    public function show($id){
        $keluarga = keluarga::where('datajemaat_id', $id)->get();
        $jemaat = jemaat::find($id);

        return view('viewjemaat', compact('keluarga', 'jemaat'));
    }
}
