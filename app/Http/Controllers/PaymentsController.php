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
    	//Create a new event
    	$payment = new Payment;
    	$payment->status = request()->status;
    	$payment->description = request()->description;
    	$payment->save();

    	//redirect
    	return redirect('/');
    }

    public function edit(Payment $payment)
    {
    	return view('payments.edit', compact('payment'));
    }
    public function update(Payment $payment)
    {
    	$payment->status = request()->status;
    	$payment->description = request()->description;
    	$payment->save();

    	//redirect
    	return redirect('/payments/'.$payment->id);
    }

    public function destroy(Payment $payment)
    {
    	$payment->delete();
    	return redirect('/');
    }
}
