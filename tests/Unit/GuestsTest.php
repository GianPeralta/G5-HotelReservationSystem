<?php

namespace Tests\Unit;

use App\Guest;
//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestsTest extends TestCase
{
	use RefreshDatabase;
    
    /** @test */
    public function a_guest_returns_its_credentials()
    {
    	$guest = factory(Guest::class)->create();
    	$credential = $guest->first_name.' '.$guest->last_name.' '.$guest->contact_number.' '.$guest->email;
    	$this->assertTrue($credential == $guest->credential()); 
    }

   
}
