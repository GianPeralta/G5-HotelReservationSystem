<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
   
    protected $fillable = ['guest_id', 'room_id', 'date'];
    public function reservation_statuses() {
    	return $this->hasMany(ReservationStatus::class);
    }

    public function guest() {
    	return $this->belongsTo(Guest::class);
    }

    public function room() {
    	return $this->belongsTo(Room::class);
    }
}
