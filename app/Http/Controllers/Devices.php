<?php

namespace App\Http\Controllers;

use App\Device;

class Devices extends Controller
{
    
	public function index()
	{
		$title = 'Devices Listing';
		$description = 'This page contains home devices.';
		
		$devices = Device::all();
		
		return view('devices.index', compact('title', 'description', 'devices'));
	}
	
	//public function show($id)
	public function show(Device $device)
	{
		$title = 'Device Details';
		$description = 'This page contains home device details.';
		
		return view('devices.show', compact('title', 'description', 'device'));
	}
	
}
