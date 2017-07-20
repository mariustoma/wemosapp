@extends('layout')

@section('content')
<ul class="list-group">
	<li class="list-group-item">{{$user->role}}</li>
	<li class="list-group-item">{{$user->name}}</li>
	<li class="list-group-item">{{$user->email}}</li>
	<li class="list-group-item">{{$user->phone}}</li>
	<li class="list-group-item">{{$user->date_added}}</li>
</ul>
@endsection
