<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationStatus extends Model
{
     protected $fillable = ['reservation_id', 'status', 'description'];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
