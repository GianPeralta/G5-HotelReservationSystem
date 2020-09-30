<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function show($id)
    {

        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');

    }

    public function store()

    {
        request()->validate([

            'name' => 'required',
            'userid' => 'required|unique:user',
        

        ]);

            
        $user = new User;
        $user->name = request()->name;
        $user->userid = request()->userid;
        
        $user->save();


        return redirect('/');
    }

    public function edit(User $user)
    {

        return view('users.edit', compact('user'));
    }