@extends('admin.layouts.master')

@section ('content')
		<div class="col-sm-3 col-md-2">
			@include ('admin.layouts.sidebar')
		</div>
		<div class="col-sm-9 col-md-10">
			<h1>Edit post</h1>
			<hr>
			<form method="POST" action="{{ route('posts-update',['id' => $post->id]) }}">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<fieldset>
					<div class="form-group required">
						<label for="title" class="control-label">Title *</label>
						<div class="">
							<input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
						</div>
					</div>
					<div class="form-group">
						<label for="slug" class="control-label">Slug *</label>
						<div class="">
							<input type="text" id="slug" name="slug" class="form-control" placeholder="/some-alias" value="{{ $post->slug }}" required>
							<span class="help-block"><strong>Please Note:</strong> The slug has to be written lowercase and may not contain dashes or special characters except dashes and underscores.</span>
						</div>
					</div>
					<div class="form-group">
						<label for="body" class="control-label">Body</label>
						<div class="">
							<textarea id="body" name="body" class="form-control" rows="10">{{ $post->body }}</textarea>
							<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
						</div>
					</div>
					<div class="form-group">
						<div class="">
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
							<button type="submit" form="delete-form" class="btn btn-danger btn-sm">Delete</button>
						</div>
					</div>
					@include ('layouts.errors')
				</fieldset>
			</form>
			<form id="delete-form" action="{{ route('posts-destroy',[ 'id' => $post->id ]) }}" method="POST">
					<div class="form-group">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
					</div>
			</form>
		</div>
@endsection ('content')
