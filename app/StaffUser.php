<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffUser extends Model
{
    protected $fillable = ['name', 'user_role_id'];

    public function user_role() {
    	return $this->belongsTo(UserRole::class);
    }
}
