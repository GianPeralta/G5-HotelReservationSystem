<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class RoomTypesController extends Controller
{
    public function index() {
    	$room_types = RoomType::all();

    	return view('room_types.index', compact('room_types'));
    }

    public function show(RoomType $room_type) {
    	return view('room_types.show', compact('room_type'));
    }

    public function create() {
    	return view('room_types.create');
    }

    public function store() {
    	$room_type = new RoomType;
    	$room_type->standard_rate = request()->standard_rate;
    	$room_type->description = request()->description;
    	$room_type->save();

    	return redirect('/room-types');
    }

    public function edit(RoomType $room_type) {
    	return view('room_types.edit', compact('room_type'));
    }

    public function update(RoomType $room_type) {
    	$room_type->standard_rate = request()->standard_rate;
    	$room_type->description = request()->description;
    	$room_type->save();

        return redirect('/room-types/'.$room_type->id);
    }

    public function destroy(RoomType $room_type) {
        $room_type->delete();
        return redirect('/room-types');
    }


}
