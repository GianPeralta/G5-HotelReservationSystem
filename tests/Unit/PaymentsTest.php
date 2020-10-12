<?php

namespace Tests\Unit;
use App\Payment;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentsTest extends TestCase
{
	use RefreshDatabase;
    
    public function a_guest_returns_its_credentials()
    {
    	$payment = factory(Payment::class)->create();
    	$credential = $payment->status.' '.$payment->description;
    	$this->assertTrue($credential == $payment->credential()); 
    }

   
}
