@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8 blog">
				@foreach($posts as $index => $post)
					<section class="secondary">
					  <div class="article-image">
							<img src="{{display_post_image($post->photo, 'sm_')}}" class="thumbnail">
							<a href="{{route('posts.show', $post->slug)}}">
								<span>{{$post->title}}</span>
							</a>    
						</div>

						<div class="article-info">
					    <h2>
					    	<a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a>
					    </h2>
					    <p>
					    	@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
					    		{{$post->summary}}
					    	@else
									{{Str::limit(strip_tags($post->content), 150, '...')}}
					    	@endif

					    	<a href="{{route('posts.show', $post->slug)}}">Preberi več &raquo;</a>
					    </p>
						</div>
					</section>
				@endforeach
			@if (Request::has('q'))
				{{$posts->appends(array('q' => Request::get('q')))->links()}}
			@else
				{{$posts->links()}}	
			@endif		
		</div>

		<div class="col-md-4">
			@include('Website::homepage.forum')
			@include('Website::homepage.join')
			@include('Website::homepage.banner')
		</div>

	</div>
@stop