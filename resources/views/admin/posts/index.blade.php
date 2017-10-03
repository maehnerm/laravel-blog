@extends ('admin.layouts.master')

@section ('content')

		<div class="col-sm-3 col-md-2">
			@include ('admin.layouts.sidebar')
		</div>

		<div class="col-sm-9 col-md-10">
			<h1>Posts</h1>
			<a href="{{ route('posts-create') }}" class="btn btn-primary btn-sm">New Post</a>
			<hr>
			@if($posts)
			<div class="table-responsive">
				<table class="table table-striped">
					<theader>
						<td>Title</td>
						<td>Slug</td>
						<td>Author</td>
						<td>Created</td>
						<td>Action</td>
					</theader>
				  <tbody>
						@foreach ($posts as $post)
							<tr>
								<td>
									<a href="{{ route('posts-show',['id' => $post->id]) }}">{{ $post->title }}</a>
								</td>
								<td>
									{{ $post->slug }}
								</td>
								<td>
									{{ $post->user->name }}
								</td>
								<td>
									{{ $post->created_at->toFormattedDateString() }}
								</td>
								<td>
									<a class="btn btn-primary btn-sm" href="{{ route('posts-edit',['id' => $post->id]) }}">edit</a>
									<!-- <div class="btn-group">
									  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="{{ route('posts-edit',['id' => $post->id]) }}">edit</a></li>
									    <li><a href="{{ route('posts-show',['id' => $post->id]) }}">preview</a></li>
									  </ul>
									</div> -->
								</td>
							</tr>
						@endforeach

				  </tbody>
				</table>
			</div>
			@endif
		</div>

@endsection ('content')
