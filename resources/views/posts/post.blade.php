<div class="col-xs-6 col-lg-4">
	<h2>{{ $post->title }}</h2>
	<span>by {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</span>
	<p>{{ $post->body }}</p>
	<p><a class="btn btn-default" href="/articles/{{ $post->alias }}" role="button">View details &raquo;</a></p>
</div><!--/.col-xs-6.col-lg-4-->
