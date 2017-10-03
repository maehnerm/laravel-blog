<p class="h3">Comments</p>
<div class="panel-group">

	@foreach ( $post->comments as $comment )

	<div class="panel panel-default">
		<div class="panel-heading"><strong>{{ $comment->author }}</strong> <strong class="pull-right">{{ $comment->created_at->diffForHumans() }}</strong></div>
		<div class="panel-body">{{ $comment->body }}</div>
	</div>

	@endforeach

</div>

<hr>

<div class="panel panel-default">
	<div class="panel-heading">Add a Comment</div>
	<div class="panel-body">
		<form method="POST" action="{{ route('comments-store',['post_id' => $post->id ]) }}">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" id="comment-author" name="author" class="form-control" placeholder="Your name">
			</div>
			<div class="form-group">
				<textarea id="comment-body" name="body" class="form-control" rows="4" placeholder="Your message here..."></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	</div>
</div>
