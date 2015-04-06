@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $post->title }}</h3>
        </div>
        <div class="panel-body">{{ $post->body }}</div>
        <div class="panel-footer">posted by <strong><a href={{ route('user', ['name' => $post->user->name]) }}>{{ $post->user->name }}</a></strong></div>
    </div>
</div>
@endsection