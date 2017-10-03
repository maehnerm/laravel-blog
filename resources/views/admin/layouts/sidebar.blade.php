<ul class="nav nav-pills nav-stacked">
	<li role="presentation" class="{{ '/'.Route::current()->uri == route('dashboard',[],false) ? 'active' : null }}" ><a href="{{ route('dashboard',[],false) }}">Dashboard</a></li>
	<li role="presentation" class="{{ '/'.Route::current()->uri == route('posts-index',[],false) ? 'active' : null }}" ><a href="{{ route('posts-index',[],false) }}">Posts</a></li>
	<li role="presentation" class="{{ '/'.Route::current()->uri == route('comments-index',[],false) ? 'active' : null }}" ><a href="{{ route('comments-index',[],false) }}">Comments</a></li>
</ul>
<hr class="visible-xs">
