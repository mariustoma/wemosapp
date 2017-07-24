<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    
	public function index()
	{
		$title = 'Home Automation';
		$description = 'This is my home automation project.';
		
		return view('pages.home', compact('title', 'description'));
	}
	
}
