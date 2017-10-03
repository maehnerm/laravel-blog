
@extends ('layouts.master')

@section ('content')
		<div class="row">
			<div class="col-sm-12">
				@include ('posts.post')
				<hr>
			</div>

			@if( $post->comments )
			<div class="col-sm-6">
				@include ('comments.index')
			</div>

			@endif
		</div>
@endsection ('content')
