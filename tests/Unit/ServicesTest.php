<?php

namespace Tests\Unit;

use App\Service;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServicesTest extends TestCase
{
  use RefreshDatabase;
  /* @test */
  public function test_a_user_return_services()
  {
    $service = factory(Service::class)->create();
    $credential = $service->name.' '.$service->description.' '.$service->guests_id;
    	$this->assertTrue($credential == $service->credential());
  }
}
