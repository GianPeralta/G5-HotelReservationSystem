<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationStatus extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reservation_id', 'guest_id', 'room_id',
    ];

    protected $table = 'reservation_statuses';
    public $timestamps = false;

    
}
