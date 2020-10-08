<?php

namespace App\Http\Controllers;

use Auth;
use App\UserRole;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function index() {
    	$user_roles = UserRole::all();

    	return view('user_roles.index', compact('user_roles'));
    }

    public function show(UserRole $user_role) {
    	return view('user_roles.show', compact('user_role'));
    }

    public function create() {
    	return view('user_roles.create');
    }

    public function store() {
        $validated_fields = request()->validate([
            'title' => 'required|unique:user_roles',
        ]);
        $user_role = UserRole::create($validated_fields);
    	return redirect('/user-roles');
    }

    public function edit(UserRole $user_role) {
    	return view('user_roles.edit', compact('user_role'));
    }

    public function update(UserRole $user_role) {
        $validated_fields = request()->validate([
            'title' => 'required'
        ]);
    	$user_role->update($validated_fields);

        return redirect('/user-roles/'.$user_role->id);
    }

    public function destroy(UserRole $user_role) {
        $user_role->delete();
        return redirect('/user-roles');
    }
}
