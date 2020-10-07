<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'guest_id'];

    public function guest() {
    	return $this->belongsTo(Guest::class);
    }
}
