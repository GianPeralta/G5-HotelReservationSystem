<?php

namespace Tests\Feature;

use Illuminate\Foundaton\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Users extends TestCase
{

public function testExample()
{
$response = $this ->get('/');

$response-> asserStatus(200);
}
}
