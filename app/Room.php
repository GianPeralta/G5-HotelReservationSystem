<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = ['name', 'status', 'floor_level', 'room_type_id'];
}
