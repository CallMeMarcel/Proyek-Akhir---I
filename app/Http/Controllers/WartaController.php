<?php

namespace App\Http\Controllers;

use App\Models\Warta;
use Illuminate\Http\Request;

class WartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allWarta = Warta::all();

        return view('warta', compact('allWarta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahwarta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWartaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx',
            'tanggal' => 'required',
        ]);
        

        $file = $request->file('file');
        $namafile=$file->getClientOriginalName();
        $tujuanFile= 'asset/file';

        $file->move($tujuanFile,$namafile);

        $newPayment = new Warta;
        $newPayment->file = $namafile;
        $newPayment->tanggal = $request->tanggal;

        
        $newPayment->save();
        return  redirect("/admin/warta")->with('status', 'Warta Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function show(Warta $warta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function edit($wartaId)
    {
        $warta = Warta::where('id', $wartaId)->first();
        
        return view('editwarta', ['warta'=>$warta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWartaRequest  $request
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$wartaId)
    {
        $request->validate([
            'tanggal' => 'required',
        ]);

        Warta::where('id', $wartaId)
        ->update([

        'tanggal' => $request->tanggal,            
        ]);
            return redirect("/admin/warta")->with('status', 'Jemaat dengan id ' .$wartaId. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warta  $warta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Warta::where('id', $id)->delete();

            return redirect("/admin/warta")->with('status', 'Warta dengan id : ' .$id. " berhasil dihapus");
    }
}
