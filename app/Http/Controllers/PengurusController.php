<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPengurus = Pengurus::all();
    
        return view('pengurus', compact('allPengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpengurus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengurusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
            'role' => 'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'google' => 'required',
            'instagram' => 'required',

        ]);

       
        $file = $request->file('gambar');
        $namafile=$file->getClientOriginalName();
        $tujuanFile= 'asset/images';

        $file->move($tujuanFile,$namafile); 

        $newPengurus = new Pengurus;
        $newPengurus->nama = $request->nama;
        $newPengurus->gambar = $namafile;
        $newPengurus->role = $request->role;
        $newPengurus->twiter = $request->twiter;
        $newPengurus->facebook = $request->facebook;
        $newPengurus->google = $request->google;
        $newPengurus->instagram = $request->google;

        if ($request->filled('twiter')) {
            $twiterLink = $request->input('twiter');
            if (filter_var($twiterLink, FILTER_VALIDATE_URL)) {
                $newPengurus->twiter = $twiterLink;
            } else {
                return redirect()->back()->withErrors(['twiter' => 'Invalid Twitter URL']);
            }
        }
        
        $newPengurus->save();

        return redirect('/admin/pengurus')->with('status', 'Pengurus berhasil ditambahkan!');
 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit($pengurusId)
    {
        $pengurus =  Pengurus::where('id', $pengurusId)->first();
        return view('editpengurus', ['pengurus'=>$pengurus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengurusRequest  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pengurusId)
    {
        $request->validate([
            'nama' => 'required',
            'role' =>'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'google' => 'required',
            'instagram' => 'required',
        ]);

        Pengurus::where('id', $pengurusId)
        ->update([
            'nama' => $request->nama,
            'role' => $request->role,
            'twiter' => $request->twiter,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'instagram' => $request->instagram,
        ]);

        return redirect("/admin/pengurus")->with('status', 'Pengurus dengan id ' .$pengurusId. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy($pengurusId)
    {
        Pengurus::where('id',$pengurusId)->delete();
        return redirect('/admin/pengurus')->with('status', 'Pengurus dengan Id ' .$pengurusId. ' Berhasil dihapus');
    }
}
