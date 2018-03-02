@extends ('layouts.master')

@section ('content')

	@if($posts)

	<div class="row">

		@foreach ($posts as $post)

			@include ('posts.post')

		@endforeach

	</div>

	@endif

@endsection ('content')
