<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;


class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allJemaat = Jemaat::all();
    
        return view('datajemaat', compact('allJemaat'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahjemaat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:8000',
            'umur' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
        ]);

        $newJemaat = new Jemaat;
        $newJemaat->nama = $request->nama;
        $newJemaat->umur = $request->umur;
        $newJemaat->jenisKelamin = $request->jenisKelamin;
        $newJemaat->alamat = $request->alamat;

        $newJemaat->save();
        return redirect("/admin/datajemaat")->with('status', 'Jemaat Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function show(Jemaat $jemaat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function edit($jemaatID)
    {
        $jemaat = Jemaat::where('id', $jemaatID)->first();
            return view('editjemaat', ['jemaat'=>$jemaat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJemaatRequest  $request
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$jemaatID)
    {
        $request->validate([
            'nama' => 'required | max:8000',
            'umur' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            ]);

            Jemaat::where('id', $jemaatID)
            ->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            ]);
            return redirect("/admin/datajemaat")->with('status', 'Jemaat dengan id ' .$jemaatID. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy($jemaatNama)
    {
        Jemaat::where('nama', $jemaatNama)->delete();

        return redirect("/admin/datajemaat")->with('status', 'Jemaat yang bernama '.$jemaatNama.' Berhasil Dihapus!');
    }
}


