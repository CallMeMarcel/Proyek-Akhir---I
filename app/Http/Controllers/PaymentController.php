<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPayment = Payment::all();

        return view('payment', compact('allPayment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
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

        $newPayment = new Payment;
        $newPayment->file = $namafile;
        $newPayment->tanggal = $request->tanggal;

        
        $newPayment->save();
        
        return redirect("/admin/payment")->with('status', 'Keuangan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($paymentId)
    {
        $payment = Payment::where('id', $paymentId)->first();
            return view('editpayment', ['payment'=>$payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$paymentId)
    {
        $request->validate([
            
            'tanggal' => 'required',
            ]);

            Payment::where('id', $paymentId)
            ->update([

            'tanggal' => $request->tanggal,            
            ]);
            return redirect("/admin/payment")->with('status', 'Keuangan dengan id ' .$paymentId. ' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($paymentId)
    {
        Payment::where('id', $paymentId)->delete();

        return redirect("/admin/payment")->with('status', 'Keuangan dengan id : ' .$paymentId. " berhasil dihapus");
    }
}
