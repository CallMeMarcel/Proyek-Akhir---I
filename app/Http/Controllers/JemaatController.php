<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Models\Payment;
use App\Models\Pengurus;
use App\Models\Keluarga;
use App\Models\Galeri;
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
        $allJemaat = Jemaat::paginate(10);  
    
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
        $validate=[
            'namakeluarga' => 'required',
            'namaayah' => 'required',
            'namaibu' => 'required',
            'sektor' => 'required',
            'alamat' => 'required',
            'namaanak' => 'required',
            ];

        $message =[
            'namakeluarga.requried' =>'Nama Harus Diisi',
            'namaayah.requried' =>'Nama Harus Diisi',
            'namaibu.requried' =>'Nama Harus Diisi',
            'sektor.required' => 'Sektor Harus Diisi',
            'alamat.required' => 'Alamat Harus Diisi',
            'namaanak.*required' => 'Nama Anak Harus Diisi',
        ];

        $this -> validate($request, $validate, $message);

        $newDatajemaat = new jemaat;
        $newDatajemaat->namakeluarga = $request->namakeluarga;
        $newDatajemaat->sektor = $request->sektor;
        $newDatajemaat->alamat = $request->alamat; 
        $newDatajemaat->save();

        $numAnak = count($request->namaanak);

        for($i = 0; $i < $numAnak; $i++) {
            $newDatakeluarga = new keluarga;
            $newDatakeluarga->datajemaat_id = $newDatajemaat->id;
            $newDatakeluarga->namaayah = $request->namaayah;
            $newDatakeluarga->namaibu = $request->namaibu;
            $newDatakeluarga->namaanak = $request->namaanak[$i];
            $newDatakeluarga->save();
        }
        return redirect("/admin/datajemaat")->with('status', 'Jemaat Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluarga = keluarga::where('id', $id)->get();
        $jemaat = jemaat::find($id);
        return view('/admin/viewjemaat', compact('keluarga', 'jemaat'));
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
            'namakeluarga' => 'required',
            'namaanak' => 'required',
            'alamat' => 'required',
            'sektor' => 'required',

        ]);

        Datajemaat::where('id', $jemaatID)
            ->update([
                'namakeluarga'=>$request->namakeluarga,
                'namaanak'=>$request->namaanak,
                'alamat'=>$request->alamat,
                'sektor'=>$request->sektor,                
            ]);
            return redirect("/admin/datajemaat")->with('status', 'Jemaat dengan id ' .$jemaatID. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jemaat::where('id', $id)->delete();

        return redirect("/admin/datajemaat")->with('status', 'Jemaat dengan Id '.$id.' Berhasil Dihapus!');
    }

    // Di dalam model Jemaat.php
    
    
    
        public function Pedro()
        {
            $allJemaat = Jemaat::all();
            $allPengurus = Pengurus::all();
            $allPayment = Payment::all();
            $latestGaleri = Galeri::latest()->take(6)->get();

        
            if ($latestGaleri->count() > 4) {
                $oldestGaleri = Galeri::oldest()->first();
                $oldestGaleri->delete();
            }
    
            
            $allGaleri = Galeri::latest()->take(4)->get();
        
            
        
            return view('about', compact('allJemaat', 'allPengurus', 'allPayment' , 'allGaleri'));
        }
        
        public function other()
        {
            
            $latestGaleri = Galeri::latest()->take(6)->get();
    
            
            if ($latestGaleri->count() > 4) {
                $oldestGaleri = Galeri::oldest()->first();
                $oldestGaleri->delete();
            }
    
            
            $allGaleri = Galeri::latest()->take(4)->get();
        
            return view('/about', compact('allGaleri'));
        }
        
    

}


