@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Create post</h1>
	{!! Form::open(['route' => 'posts.store']) !!}
		@include('posts._form')
	{!! Form::close() !!}
</div>
@endsection
