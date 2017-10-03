<h1>{{ $post->title }}</h1>
<span>by {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</span>
<p>{{ $post->body }}</p>
<p><a class="btn btn-default" href="{{route('show-front',['slug' => $post->slug])}}" role="button">View details &raquo;</a></p>
