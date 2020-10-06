<?php

namespace App\Http\Controllers;

use Auth;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index() {
    	$reservations = Reservation::all();

    	return view('reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation) {
    	return view('reservations.show', compact('reservation'));
    }

    public function create() {
    	return view('reservations.create');
    }

    public function store() {
        $validated_fields = request()->validate([
            'date' => 'required',
            'guest_id' => 'required|unique:reservations',
            'room_id' => 'required|unique:reservations'
        ]);

        $reservation = Reservation::create($validated_fields);

        return redirect('/reservations');
    }

    public function edit(Reservation $reservation) {
    	return view('reservations.edit', compact('reservation'));
    }

    public function update(Reservation $reservation) {
        $validated_fields = request()->validate([
            'date' => 'required',
            'guest_id' => 'required|unique:reservations',
            'room_id' => 'required|unique:reservations'
        ]);
        $reservation->date = request()->date;
        $reservation->guest_id = request()->guest_id;
        $reservation->room_id = request()->room_id;
        $reservation->save();


        return redirect('/reservations/'.$reservation->id);
    }

    public function destroy(Reservation $reservation) {
        $reservation->delete();
        return redirect('/reservations');
    }
}
