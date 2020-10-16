<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Users extends TestCase
{
	

public function testExample()

{

	$users = factory(User::class)->create();

	%response = $this->get('/');

	$response->assertSatus(200);
}
}