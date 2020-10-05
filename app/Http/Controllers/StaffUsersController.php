<?php

namespace App\Http\Controllers;

use Auth;
use App\StaffUser;
use Illuminate\Http\Request;

class StaffUsersController extends Controller
{
    public function index() {
    	$staff_users = StaffUser::all();

    	return view('staff_users.index', compact('staff_users'));
    }

    public function show(StaffUser $staff_user) {
    	return view('staff_users.show', compact('staff_user'));
    }

    public function create() {
    	return view('staff_users.create');
    }

    public function store() {
        $validated_fields = request()->validate([
            'name' => 'required',
            'user_role_id' => 'required' 
        ]);
        $staff_user = StaffUser::create($validated_fields);
    	return redirect('/staff-users');
    }

    public function edit(StaffUser $staff_user) {
    	return view('staff_users.edit', compact('staff_user'));
    }

    public function update(StaffUser $staff_user) {
        $validated_fields = request()->validate([
            'name' => 'required',
            'user_role_id' => 'required'
        ]);
    	$staff_user->name = request()->name;
    	$staff_user->user_role_id = request()->user_role_id;
    	$staff_user->save();

        return redirect('/staff-users/'.$staff_user->id);
    }

    public function destroy(StaffUser $staff_user) {
        $staff_user->delete();
        return redirect('/staff-users');
    }
}
