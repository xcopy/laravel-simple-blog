@extends('layouts.app')

@section('content')
<div class="container">
	@include('posts._heading', ['title' => 'All posts by '.$user->name])
	@include('posts._list', ['posts' => $posts])
</div>
@endsection
