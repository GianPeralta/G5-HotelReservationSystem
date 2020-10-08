<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    public function index()
    {
    	$guests = Guest::all();
    	return view('guests.index', compact('guests'));
    }

    public function create()
    {
    	return view('guests.create');
    }

    public function show(Guest $guest)
    {
    	return view('guests.show', compact('guest'));
    }

    public function store()
    {
    	//create new guest
    	/*$guest = new Guest;
    	$guest->first_name = request()->first_name;
    	$guest->last_name = request()->last_name;
    	$guest->contact_number = request()->contact_number;
    	$guest->email = request()->email;
    	$guest->save(); */

        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required|unique:guests',
            'email' => 'required|unique:guests'
        ]);
        $guest = Guest::create($validated_fields);

    	//redirect
    	return redirect('/guests');
    }

    public function edit(Guest $guest)
    {
    	return view('guests.edit', compact('guest'));
    }

    public function update(Guest $guest)
    {
    	$validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required|unique:guests',
            'email' => 'required|unique:guests'
        ]);
        $guest->update($validated_fields);

    	//redirect
    	return redirect('/guests/'.$guest->id);
    }

    public function destroy(Guest $guest)
    {
    	$guest->delete();
    	return redirect('/guests');
    }
}
