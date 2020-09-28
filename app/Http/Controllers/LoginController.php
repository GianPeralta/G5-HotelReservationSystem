<?php

namespace App\Http\Controllers;

use Auth;
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

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
