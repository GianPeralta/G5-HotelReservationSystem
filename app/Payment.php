<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Eloquent
class Payment extends Model
{
	protected $fillable = ['status', 'description', 'guest_id'];	
}
