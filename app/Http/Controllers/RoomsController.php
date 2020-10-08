<?php

namespace App\Http\Controllers;
use Auth;
use App\Room;
use App\RoomType;
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
        $room_types = RoomType::all();
    	return view('rooms.create', compact('room_types'));
    }

    public function store() {
        $validated_fields = request()->validate([
            'name' => 'required|unique:rooms',
            'status' => 'required',
            'floor_level' => 'required',
            'room_type_id' => 'required'
        ]);

        $room = Room::create($validated_fields);

        return redirect('/rooms');
    }

    public function edit(Room $room) {
        $room_types = RoomType::all();
    	return view('rooms.edit', compact('room', 'room_types'));
    }

    public function update(Room $room) {
        $validated_fields = request()->validate([
            'name' => 'required|unique:rooms',
            'status' => 'required',
            'floor_level' => 'required',
            'room_type_id' => 'required'
        ]);

        $room->update($validated_fields);

        return redirect('/rooms/'.$room->id);
    }

    public function destroy(Room $room) {
        $room->delete();
        return redirect('/rooms');
    }

}
