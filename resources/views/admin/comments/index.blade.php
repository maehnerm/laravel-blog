@extends ('admin.layouts.master')

@section ('content')

		<div class="col-sm-3 col-md-2">
			@include ('admin.layouts.sidebar')
		</div>

		<div class="col-sm-9 col-md-10">
			@if($comments)
			<div class="">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Created by</th>
							<th>Message</th>
							<th>Created</th>
							<th>Action</th>
						</tr>
					</thead>
				  <tbody>
						@foreach ($comments as $comment)
							<tr>
								<td>
									{{ $comment->author }}
								</td>
								<td>
									{{ $comment->body }}
								</td>
								<td>
									{{ $comment->created_at->toFormattedDateString() }}
								</td>
								<td>
									<a class="btn btn-primary" href="{{route('posts-show',['post_id' =>$comment->post->id])}}">View related Post</a>
								</td>
							</tr>
						@endforeach

				  </tbody>
				</table>
			</div>
			@endif
		</div>

@endsection ('content')
