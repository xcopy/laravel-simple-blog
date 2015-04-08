@extends('layouts.app')

@section('content')
<div class="container">
	<h1>All posts by {{ $user->name }}</h1>
	<hr>
	@include('posts.list', ['posts' => $posts])
</div>
@endsection
