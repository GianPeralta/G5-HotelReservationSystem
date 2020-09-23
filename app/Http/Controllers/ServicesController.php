<?php

namespace App\Http\Controllers;

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
    	$service = new Service;
    	$service->name = request()->name;
    	$service->description = request()->description;
    	$service->guests_id = request()->guests_id;
    	$service->save();

    	return redirect('/services');
    }

    public function edit(Service $service) {
    	return view('services.edit', compact('service'));
    }

    public function update(Service $service) {
        $service->name = request()->name;
        $service->description = request()->description;
        $service->guests_id = request()->guests_id;
        $service->save();

        return redirect('/services/'.$service->id);
    }

    public function destroy(Service $service) {
        $service->delete();
        return redirect('/services');
    }

}
