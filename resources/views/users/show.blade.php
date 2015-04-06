@extends('layouts.app')

@section('content')
@include('posts.list', ['posts' => $posts])
@endsection
