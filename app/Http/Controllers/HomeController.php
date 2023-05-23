<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
	public function handle($request)
	{
	  \View::share('user', auth()->user());
	}

	public function index(){
		return view('home/home');
	}
	public function find(){
		return view('home/find');
	}

}
