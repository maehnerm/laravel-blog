@extends('admin.layouts.master')

@section('content')

		<div class="col-sm-3 col-md-2">
			@include ('admin.layouts.sidebar')
		</div>

    <div class="col-sm-9 col-md-10">
    	<div class="panel panel-default">
    	    <div class="panel-heading">Dashboard</div>

    	    <div class="panel-body">
    	        @if (session('status'))
    	            <div class="alert alert-success">
    	                {{ session('status') }}
    	            </div>
    	        @endif

    	        You are logged in!
    	    </div>
    	</div>
    </div>

@endsection
