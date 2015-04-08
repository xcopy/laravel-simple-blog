@extends('layouts.app')

@section('content')
<div class="container">
	<h1>All posts</h1>
	<hr>
	@include('posts.list', ['posts' => $posts])
</div>
@endsection
