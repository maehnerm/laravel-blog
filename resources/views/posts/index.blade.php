@extends ('layouts.master')

@section ('content')
	<div class="jumbotron">
		<h1>Hello, world!</h1>
		<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
	</div>

	@if($posts)

	<div class="row">

		@foreach ($posts as $post)

			@include ('posts.post')

		@endforeach

	</div>

	@endif

@endsection ('content')
