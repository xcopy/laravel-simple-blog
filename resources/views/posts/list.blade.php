<div class="container">
    @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                </h3>
            </div>
            <div class="panel-body">{{ $post->body }}</div>
            <div class="panel-footer">posted by <strong><a href={{ route('users.show', ['id' => $post->user->id]) }}>{{ $post->user->name }}</a></strong></div>
        </div>
    @endforeach
</div>