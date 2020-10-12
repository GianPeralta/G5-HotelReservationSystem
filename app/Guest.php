<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'contact_number', 'email',
    ];

    public $timestamps = false;


    public function payments() {
    	return $this->hasMany(Payment::class);
    }

    public function reservations() {
    	return $this->hasMany(Reservation::class);
    }

    public function services() {
    	return $this->hasMany(Service::class);
    }

    public function credential()
    {
        return $this->first_name.' '.$this->last_name.' '.$this->contact_number.' '.$this->email;
    }

}
