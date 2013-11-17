@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8 blog">

			@if ($posts->getCurrentPage() == 1 and !Request::has('q'))
				@include('Website::homepage.posts.featured')
			@else
				@if (Request::has('q'))
					{{$posts->appends(array('q' => Request::get('q')))->links()}}
				@else
					{{$posts->links()}}	
				@endif		
			@endif

			@include('Website::homepage.posts.list')

			@if (Request::has('q'))
				{{$posts->appends(array('q' => Request::get('q')))->links()}}
			@else
				{{$posts->links()}}	
			@endif		
		</div>
		

		<div class="col-md-4">
			@include('Website::homepage.matches')
			@include('Website::homepage.join')
			@include('Website::homepage.forum')
			@include('Website::homepage.social')
			@include('Website::homepage.banner')
		</div>

	</div>
@stop