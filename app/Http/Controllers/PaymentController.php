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
            
            'persembahan' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            
        ]);

        $newPayment = new Payment;
        $newPayment->persembahan = $request->persembahan;
        $newPayment->nominal = $request->nominal;
        $newPayment->tanggal = $request->tanggal;
        $newPayment->status = $request->status;
        
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
            'persembahan' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            ]);

            Payment::where('id', $paymentId)
            ->update([
            'persembahan' => $request->persembahan,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
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
