<?php

namespace App\Http\Controllers;

use App\User;

class Users extends Controller
{
	
	public function index()
	{
		$title = 'Users';
		$description = 'This page contains users accounts for this home.';
		
		$users = User::all();
		
		return view('users.index', compact('title', 'description', 'users'));
	}
	
	public function show(User $user)
	{
		$title = 'User Details';
		$description = 'This page contains user details.';
		
		return view('users.show', compact('title', 'description', 'user'));
	}
	
	public function profile()
	{
		$title = 'My Profile';
		$description = 'This page contains my profile information.';
		
		$profile = '';
		
		return view('users.profile', compact('title', 'description', 'profile'));
	}
	
}
