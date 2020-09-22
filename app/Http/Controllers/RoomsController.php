<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index() {
    	$rooms = Room::all();

    	return view('rooms.index', compact('rooms'));
    }

    public function show(Room $room) {
    	return view('rooms.show', compact('room'));
    }

    public function create() {
    	return view('rooms.create');
    }

    public function store() {
    	$room = new Room;
    	$room->name = request()->name;
    	$room->status = request()->status;
    	$room->floor_level = request()->floor_level;
    	$room->room_type_id = request()->room_type;
    	$room->save();

    	return redirect('/rooms');
    }

    public function edit(Room $room) {
    	return view('rooms.edit', compact('room'));
    }

    public function update(Room $room) {
        $room->name = request()->name;
        $room->status = request()->status;
        $room->floor_level = request()->floor_level;
        $room->room_type_id = request()->room_type;
        $room->save();

        return redirect('/rooms/'.$room->id);
    }

    public function destroy(Room $room) {
        $room->delete();
        return redirect('/rooms');
    }

}
