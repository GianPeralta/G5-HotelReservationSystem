<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = ['standard_rate', 'description'];

    public function rooms() {
    	return $this->hasMany(Room::class);
    }
}
