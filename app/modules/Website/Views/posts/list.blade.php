@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8 blog">
				<h3>{{$page->title}}</h3>

				@foreach($posts as $index => $post)
					<section class="secondary">
					  <div class="article-image">
							<img src="{{display_post_image($post->photo, 'sm_')}}" class="thumbnail">
							<a href="{{URL::current()}}/{{$post->slug}}">
								<span>{{$post->title}}</span>
							</a>    
						</div>

						<div class="article-info">
					    <h2>
					    	<a href="{{URL::current()}}/{{$post->slug}}">{{$post->title}}</a>
					    </h2>
					    <p>
					    	@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
					    		{{$post->summary}}
					    	@else
									{{Str::limit(strip_tags($post->content), 150, '...')}}
					    	@endif

					    	<a href="{{URL::current()}}/{{$post->slug}}">Preberi več &raquo;</a>
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

			<!-- always display the first page children -->
			@if (count($pages[0]->children))
				<div class="link-list">
					<h4>Preberi več...</h4>
					<ul>
						@foreach($pages[0]->children as $index => $subpage)
							<li>
								<a href="/{{$pages[0]->slug}}/{{$subpage->slug}}">{{$subpage->title}}</a>
							</li>
						@endforeach
					</ul>					
				</div>
			@else
				@include('Website::homepage.matches')
				@include('Website::homepage.social')
				@include('Website::homepage.forum')
				@include('Website::homepage.join')
				@include('Website::homepage.banner')
			@endif


		</div>

	</div>
@stop