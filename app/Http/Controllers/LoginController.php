<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login.index');
    }

    public function login()
    {	
    	request()->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials)){
    		return redirect('/home');
    	}
    	return back()->withErrors([
    		'credentials' => '*** Incorrect email or password ***'
    	]);
    }

    public function register()
    {
    	return view('login.register');
    }

    public function store()
    {
    	$validated_fields = request()->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required'
    	]);
    	$validated_fields['password'] = bcrypt($validated_fields['password']);
    	$user = User::create($validated_fields);

    	return redirect('/');

    	//simplified form
    	/*$user = User::create([
			'name' => 'Juan',
			'email' => 'juan@email.com',
			'password' => bycrypt'password'
		]);
    	$user = new User; */	
 		   
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
