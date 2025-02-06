<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBerita = Berita::all();
    
        return view('berita', compact('allBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'aktor' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|max:5000',
            'link' => 'required',
        ]);

        $file = $request->file('gambar');
        $namafile=$file->getClientOriginalName();
        $tujuanFile= 'asset/images';

        $file->move($tujuanFile,$namafile);

        $newBerita = new Berita;
        $newBerita->gambar = $namafile;
        $newBerita->deskripsi = $request->deskripsi;
        $newBerita->judul = $request->judul;
        $newBerita->aktor = $request->aktor;
        $newBerita->tanggal = $request->tanggal;
        $newBerita->link = $request->link;

        $newBerita->save();
        
        return redirect("/admin/berita")->with('status', 'galeri Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($beritaId)
    {
        $berita = Berita::where('id', $beritaId)->first();
        return view('editberita', ['berita'=>$berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaRequest  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$beritaId)
    {
        $request->validate([
            'deskripsi' => 'required',
            'judul' => 'required',
            'aktor' => 'required',
            'tanggal' => 'required',
            'link' => 'required',

        ]);

        Berita::where('id', $beritaId)
        ->update([
            'deskripsi' => $request->deskripsi,
            'judul' => $request->judul,
            'aktor'=> $request->aktor,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
        ]);

        return redirect("/admin/berita")->with('status', 'Galeri dengan id ' .$beritaId. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::where('id', $id)->delete();

        return redirect("/admin/berita")->with('status', 'Galeri yang ber id '.$id.' Berhasil Dihapus!');
    }
}
