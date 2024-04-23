<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allGaleri = Galeri::all();
    
        return view('galeri', compact('allGaleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahgaleri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'deskripsi' => 'required',
        ]);

        $file = $request->file('gambar');
        $namafile=$file->getClientOriginalName();
        $tujuanFile= 'asset/images';

        $file->move($tujuanFile,$namafile);

        $newGaleri = new Galeri;
        $newGaleri->gambar = $namafile;
        $newGaleri->deskripsi = $request->deskripsi;

        $newGaleri->save();
        
        return redirect("/admin/galeri")->with('status', 'galeri Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($galeriId)
    {
        $galeri = Galeri::where('id', $galeriId)->first();
        return view('editgaleri', ['galeri'=>$galeri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriRequest  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$galeriId)
    {
        $request->validated([
            'deskripsi' => 'required',
        ]);

        Galeri::where('id', $galeriId)
        ->update([
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect("/admin/galeri")->with('status', 'Galeri dengan id ' .$galeriId. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($galeriId)
    {
        Galeri::where('id', $galeriId)->delete();

        return redirect("/admin/galeri")->with('status', 'Galeri yang ber id '.$galeriId.' Berhasil Dihapus!');
    }
}
