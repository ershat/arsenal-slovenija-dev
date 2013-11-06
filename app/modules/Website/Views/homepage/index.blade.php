@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8 blog">

			@if ($posts->getCurrentPage() == 1 and !Request::has('q'))
				<section class="primary">
					<div id="carousel-featured" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					  	@foreach($featured as $index => $post)
								<li data-target="#carousel-featured" data-slide-to="{{$index}}" @if($index == 0)class="active"@endif></li>
					  	@endforeach
					  </ol>

					  <div class="carousel-inner">
					  	@foreach($featured as $index => $post)
					      <a href="{{route('posts.show', $post->slug)}}" class="item @if($index == 0)active@endif" style="width: 100%; height: 350px; oveflow: hidden;">
					        <img src="{{display_post_image($post->photo, 'big_')}}" alt="...">
					        <div class="carousel-caption">
					          <h4>{{$post->title}}</h4>

										Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
										Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
					        </div>
					      </a>
				      @endforeach
				    </div>

				    <!-- Controls -->
			      <a class="left carousel-control" href="#carousel-featured" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left"></span>
			      </a>
			      <a class="right carousel-control" href="#carousel-featured" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			      </a>
				</section>
			@else
				@if (Request::has('q'))
					{{$posts->appends(array('q' => Request::get('q')))->links()}}
				@else
					{{$posts->links()}}	
				@endif		
			@endif

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
				    	<span style="font-weight: bold; color: #999">
				    	Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
				    	Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
				    	</span>
							<br>
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
			@include('Website::homepage.matches')
			@include('Website::homepage.social')
			@include('Website::homepage.forum')
			@include('Website::homepage.join')
			@include('Website::homepage.banner')
		</div>

	</div>
@stop