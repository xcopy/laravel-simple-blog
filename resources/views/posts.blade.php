<div class="container">
    @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{ route('post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                </h3>
            </div>
            <div class="panel-body">{{ $post->body }}</div>
            <div class="panel-footer">posted by <strong><a href={{ route('user', ['name' => $post->user->name]) }}>{{ $post->user->name }}</a></strong></div>
        </div>
    @endforeach
</div>