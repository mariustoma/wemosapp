<?php

namespace App\Http\Controllers;

use App\Doc;

class Docs extends Controller
{
	public function index()
	{
		$title = 'Documentation';
		$description = 'This page contains home automation documentation.';
		
		return view('docs.index', compact('title', 'description'));
	}
}
