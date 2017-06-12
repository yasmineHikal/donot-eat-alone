@extends('users.layouts.layout')
@section('title')
Conversations
@endsection
@section('content')
	<ul>
		@foreach($users as $user)
			<li>
				{{$user->UserName}}
			</li>
		@endforeach
	</ul>
@endsection