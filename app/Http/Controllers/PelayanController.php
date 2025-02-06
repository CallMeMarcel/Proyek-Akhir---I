<?php

namespace App\Http\Controllers;

use App\Models\Pelayan;
use Illuminate\Http\Request;


class PelayanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPelayan = Pelayan::all();

        return view('pelayan', compact('allPelayan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpelayan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePelayanRequest  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'=> 'required',
            'khotbah' => 'required|max:8000',
            'liturgis' => 'required|max:8000',
            'warta' => 'required|max:8000',
            'persembahan' => 'required|max:8000',
            'organis' => 'required|max:8000',
            'song' => 'required|max:8000',
            'multimedia' => 'required|max:8000',
            'doa' => 'required|max:8000',
        ]);

        $newPelayan = new Pelayan;
        $newPelayan->tanggal = $request->tanggal;
        $newPelayan->khotbah = $request->khotbah;
        $newPelayan->liturgis = $request->liturgis;
        $newPelayan->warta = $request->warta;
        $newPelayan->persembahan = $request->persembahan;
        $newPelayan->organis = $request->organis;
        $newPelayan->song = $request->song;
        $newPelayan->multimedia = $request->multimedia;
        $newPelayan->doa = $request->doa;

        $newPelayan->save();
        
        return redirect("/admin/pelayan")->with('status', 'Pelayan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayan $pelayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function edit($pelayanId)
    {
        $pelayan = Pelayan::where('id', $pelayanId)->first();
        return view('editpelayan' , ['pelayan'=>$pelayan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelayanRequest  $request
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pelayanId)
    {
        $request->validate([
            'tanggal'=> 'required',
            'khotbah'=> 'required|max:8000',
            'liturgis'=> 'required|max:8000',
            'warta'=> 'required|max:8000',
            'persembahan'=> 'required|max:8000',
            'organis'=> 'required|max:8000',
            'song'=> 'required|max:8000',
            'multimedia'=> 'required|max:8000',
            'doa'=> 'required|max:8000',
        ]);

        Pelayan::where('id', $pelayanId)
        ->update([
            'tanggal'=> $request->tanggal,
            'khotbah'=> $request->khotbah,
            'liturgis'=> $request->liturgis,
            'warta'=> $request->warta,
            'persembahan'=> $request->persembahan,
            'organis'=> $request->organis,
            'song'=> $request->song,
            'multimedia'=> $request->multimedia,
            'doa'=> $request->doa,

        ]);

        return redirect("/admin/pelayan")->with('status', 'Pelayan berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Pelayan::where('id', $id)->delete();

            return redirect("/admin/pelayan")->with('status', 'Pelayan dengan id ' .$id. 'berhasil di hapus');
    }
}
