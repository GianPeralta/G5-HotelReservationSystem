<?php

namespace App\Http\Controllers;

use App\ReservationStatus;
use Illuminate\Http\Request;

class ReservationStatusesController extends Controller
{
    public function index()
    {
    	$reservation_statuses = ReservationStatus::all();
    	return view('reservation_statuses.index', compact('reservation_statuses'));
    }

    public function create()
    {
    	return view('reservation_statuses.create');
    }

    public function show(ReservationStatus $reservation_status)
    {
    	return view('reservation_statuses.show', compact('reservation_status'));
    }

    public function store()
    {
    	//create new reservation_status
    	$validated_fields = request()->validate([
            'reservation_status_id' => 'required|unique:reservation_statuses',
            'guest_id' => 'required|unique:reservation_statuses',
            'room_id' => 'required|unique:reservation_statuses'
        ]);
        $reservation_status = ReservationStatus::create($validated_fields);

    	//redirect
    	return redirect('/reservation_statuses');
    }

    public function edit(ReservationStatus $reservation_status)
    {
        return view('reservation_statuses.edit', compact('reservation_status'));
    }

    public function update(ReservationStatus $reservation_status)
    {
        $validated_fields = request()->validate([
            'reservation_status_id' => 'required|unique:reservation_statuses',
            'guest_id' => 'required|unique:reservation_statuses',
            'room_id' => 'required|unique:reservation_statuses'
        ]);
        
        $reservation_status->reservation_status_id = request()->reservation_status_id;
        $reservation_status->guest_id = request()->guest_id;
        $reservation_status->room_id = request()->room_id;
        $reservation_status->save();

        //redirect
        return redirect('/reservation_statuses/'.$reservation_status->id);
    }

    public function destroy(ReservationStatus $reservation_status)
    {
        $reservation_status->delete();
        return redirect('/reservation_statuses');
    }

}
