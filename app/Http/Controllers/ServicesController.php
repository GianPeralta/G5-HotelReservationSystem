<?php

namespace App\Http\Controllers;

use Auth;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
    	$services = Service::all();

    	return view('services.index', compact('services'));
    }

    public function show(Service $service) {
    	return view('services.show', compact('service'));
    }

    public function create() {
    	return view('services.create');
    }

    public function store() {
      $validated_fields = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'guest_id' => 'required'
        ]);

        $service = Service::create($validated_fields);

    	return redirect('/services');
    }

    public function edit(Service $service) {
    	return view('services.edit', compact('service'));
    }

    public function update(Service $service) {

      $validated_fields = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'guest_id' => 'required'
        ]);

        $service->update($validated_fields);

        return redirect('/services/'.$service->id);
    }

    public function destroy(Service $service) {
        $service->delete();
        return redirect('/services');
    }

}
