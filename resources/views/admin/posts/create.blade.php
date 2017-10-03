@extends('admin.layouts.master')

@section ('content')
		<div class="col-sm-3 col-md-2">
			@include ('admin.layouts.sidebar')
		</div>
		<div class="col-sm-9 col-md-10">
			<h1>Create a new post</h1>
			<hr>
			<form method="POST" action="{{ route('posts-store') }}">
				{{ csrf_field() }}
				<fieldset>
					<div class="form-group required">
						<label for="title" class="control-label">Title *</label>
						<div class="">
							<input type="text" id="title" name="title" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label for="slug" class="control-label">Slug *</label>
						<div class="">
							<input type="text" id="alias" name="slug" class="form-control" placeholder="some-slug" required>
							<span class="help-block"><strong>Please Note:</strong> The slug has to be written lowercase and may not contain dashes or special characters except dashes and underscores.</span>
						</div>
					</div>
					<div class="form-group">
						<label for="body" class="control-label">Body</label>
						<div class="">
							<textarea id="body" name="body" class="form-control" rows="10"></textarea>
							<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
						</div>
					</div>
					<div class="form-group">
						<div class="">
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
						</div>
					</div>
					@include ('layouts.errors')
				</fieldset>
			</form>
		</div>
@endsection ('content')
