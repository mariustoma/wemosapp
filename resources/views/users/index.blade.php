@extends('layout')

@section('content')
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Role</th>
			<th>Name</th>
			<th>E-mail</th>
			<th>Phone</th>
			<th>Date Added</th>
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
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
