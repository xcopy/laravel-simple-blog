@extends('layouts.app')

@section('content')
@include('posts', ['posts' => $posts])
@endsection
