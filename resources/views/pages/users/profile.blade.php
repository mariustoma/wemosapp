@extends('layouts.master')

@section('content')
<div>
	<hr>
	<form method="POST" action="/profile/create">
		<div class="form-group">
			<label for="profile_name">Name</label> 
			<input name="name" type="text" class="form-control" id="profile_name" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="profile_email">E-mail</label> 
			<input name="email" type="text" class="form-control" id="profile_email" placeholder="email@server.com">
		</div>
		<div class="form-group">
			<label for="profile_phone">Phone</label> 
			<input name="phone" type="text" class="form-control" id="profile_phone" placeholder="0987654321">
		</div>
		<div class="form-group">
			<label for="profile_password">Password</label> 
			<input name="password" type="password" class="form-control" id="profile_password" placeholder="******">
		</div>
		<div class="form-group">
			<label for="profile_description">Description</label> 
			<textarea name="description" class="form-control" id="profile_description" placeholder="Description about user"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection
