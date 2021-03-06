<?php

namespace App\Http\Controllers;

use App\Payment;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::all();     

        return view('payments.index', compact('payments')); 
    }
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }
    public function create()
    {
        return view('payments.create');
    }   
    public function store()
    {
 
        $validated_fields = request()->validate([
            'status' => 'required',
            'description' => 'required',
            'guest_id' => 'required'
        ]);

        $payment = Payment::create($validated_fields);

        return redirect('/payments');
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }
    public function update(Payment $payment)
    {
        $validated_fields = request()->validate([
            'status' => 'required',
            'description' => 'required',
            'guest_id' => 'required'
        ]);
        $payment->update($validated_fields);

        //redirect
        return redirect('/payments/'.$payment->id);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect('/payments');
    }
}
