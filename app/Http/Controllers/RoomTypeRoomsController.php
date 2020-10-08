<?php

namespace App\Http\Controllers;

use Auth;
use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeRoomsController extends Controller
{
    public function store(RoomType $room_type){

    	$validated_fields = request()->validate([
    		'name' => 'required|unique:rooms',
    		'status' => 'required',
    		'floor_level' => 'required'
    	]);
    	$room_type->rooms()->create($validated_fields);

    	return redirect('/room-types/'.$room_type->id);
    }
}
