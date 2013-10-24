@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8">
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
					    	{{$post->summary}}
					    	<a href="{{route('posts.show', $post->slug)}}">Preberi več &raquo;</a>
					    </p>
						</div>
					</section>
				@endforeach		
			{{$posts->links()}}			
		</div>

		<div class="col-md-4">
			
		</div>

	</div>
@stop