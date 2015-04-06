@extends('layouts.app')

@section('content')
@include('posts.list', ['posts' => $user->posts])
@endsection
