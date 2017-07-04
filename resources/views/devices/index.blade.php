@extends('layout')

@section('content')
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Type</th>
			<th>Title</th>
		</tr>
	</thead>
	<tbody>
		@foreach($devices as $dev)
		<tr>
			<td>{{$dev->id}}</td>
			<td>{{$dev->type}}</td>
			<td><a href="/devices/{{$dev->id}}">{{$dev->title}}</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
