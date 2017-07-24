@extends('layouts.master')

@section('content')
<hr>
<div class="text-right">
	<a class="btn btn-default" href="/users/create" role="button">Create New User</a>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Role</th>
			<th>Name</th>
			<th>E-mail</th>
			<th>Phone</th>
			<th>Date Added</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->role}}</td>
			<td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->date_added}}</td>
			<td><a class="btn btn-default" href="/users/create" role="button">Edit</a></td>
			<td><a class="btn btn-default" href="/users/create" role="button">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
