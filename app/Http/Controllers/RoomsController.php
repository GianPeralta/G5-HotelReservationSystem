<?php

namespace App\Http\Controllers;
use Auth;
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
    	return view('rooms.edit', compact('room'));
    }

    public function update(Room $room) {
        $validated_fields = request()->validate([
            'name' => 'required|unique:rooms',
            'status' => 'required',
            'floor_level' => 'required',
            'room_type_id' => 'required'
        ]);

        $room->name = request()->name;
        $room->status = request()->status;
        $room->floor_level = request()->floor_level;
        $room->room_type_id = request()->room_type_id;
        $room->save();

        return redirect('/rooms/'.$room->id);
    }

    public function destroy(Room $room) {
        $room->delete();
        return redirect('/rooms');
    }

}
