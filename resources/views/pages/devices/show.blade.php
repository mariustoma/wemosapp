@extends('layouts.master')

@section('content')
<ul class="list-group">
	<li class="list-group-item">{{$device->type}}</li>
	<li class="list-group-item">{{$device->title}}</li>
</ul>
@endsection
