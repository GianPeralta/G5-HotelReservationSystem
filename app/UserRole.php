<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = ['name'];

    public function staff_users() {
    	return $this->hasMany(StaffUser::class);
    }
}
