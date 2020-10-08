<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = ['title'];

    public function staff_users() {
    	return $this->hasMany(StaffUser::class);
    }
}
