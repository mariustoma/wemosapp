<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Users extends Controller
{
	
	// GET /users
	public function index()
	{
		$title = 'Users';
		$description = 'This page contains users accounts for this home.';
		
		$users = User::orderBy('name')->get();
		//$users = User::all();
		
		return view('pages.users.index', compact('title', 'description', 'users'));
	}
	
	// GET /users/{id}
	public function show(User $user)
	{
		$title = 'User Details';
		$description = 'This page contains user details.';
		
		return view('pages.users.show', compact('title', 'description', 'user'));
	}
	
	// GET /users/create
	public function create()
	{
		$title = 'Create New User';
		$description = 'Crete New User for your home automation project.';
		
		return view('pages.users.create', compact('title', 'description'));
	}
	
	// POST /users
	public function store(Request $request)
	{
		$this->validate(request(), [
			'name'		=> 'required',
			'email'		=> 'required',
			'phone'		=> 'required',
			'password'	=> 'required',
		]);
		
		//dd(request()->all());
		User::create(request(['name', 'email', 'phone', 'password', 'description']));
		//User::create($request->all());
		
		redirect('/users/index');
	}
	
	// GET /users/{id}/edit
	public function edit($id)
	{
		
	}
	
	// PATCH /users/{id}
	public function update(Request $request, $id)
	{
		
	}
	
	// DELETE /users/{id}
	public function destroy($id)
	{
		
	}
	
	public function profile()
	{
		$title = 'My Profile';
		$description = 'This page contains my profile information.';
		
		$profile = '';
		
		return view('pages.users.profile', compact('title', 'description', 'profile'));
	}
	
}
