<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class SessionsController extends Controller
{
    public function __construct(){
		$this->middleware('guest',['except' => 'logout']);
	}

    public function login(){
    	return view('sessions.login');
    }

    public function logout(){
    	auth()->logout();

    	return redirect('/');
    }

    public function store(){
    	if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
                ]);
        }
    	return redirect()->home();
    }
}
