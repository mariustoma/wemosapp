<?php

namespace App\Http\Controllers;

use App\Light;

class Lights extends Controller
{
	
	public function index()
	{
		$title = 'Lights';
		$description = 'This page contains lights.';
		
		return view('pages.lights.index', compact('title', 'description'));
	}
	
}
