@extends('Website::master')

@section('meta-tags')

	@if (!empty($post->photo))
		<meta property="og:image" content="{{asset(display_post_image($post->photo, ''))}}"/>
	@endif

	<meta property="og:title" content="{{$post->title}} - Arsenal Slovenija"/>
	<meta property="og:site_name" content="Arsenal Slovenija"/>
	<meta property="og:type" content="blog"/>

	@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
		<meta property="og:description" content="{{post->summary}}" />
	@else
		<meta property="og:description" content="{{Str::limit(strip_tags($post->content), 100, '...')}}" />
	@endif


@stop

@section('app')
	<div class="container">
		<div class="col-md-12">

			<article>

				<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

				<header>
					@if (!Auth::guest())
						<h3 class="editable" data-url="{{route('backend.posts.updateSingle', $post->id)}}" data-name="title">{{$post->title}}</h3>
					@else
						<h3>{{$post->title}}</h3>
					@endif
				</header>

				<aside>
				  <a type="button" class="btn btn-primary btn-sm btn-block" href="#" onclick="{{display_fb_share_link($post->title)}}">
				  	Deli na Facebook
				  </a>
				  <a type="button" class="btn btn-info btn-sm btn-block" href="#" onclick="{{display_tw_share_link($post->title)}}">
				  	Deli na Twitter
				  </a>
				  <a type="button" class="btn btn-danger btn-sm btn-block" href="#" onclick="{{display_gplus_share_link($post->title)}}">
				  	Deli na Google+
				  </a>
				  <div class="clearfix"></div><br>

					@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
						{{$post->summary}}
					@else
						{{Str::limit(strip_tags($post->content), 100, '...')}}
					@endif
				</aside>
				
				@if (!empty($post->photo))
					<img src="{{display_post_image($post->photo, '')}}" class="article-image thumbnail">
				@endif

				@if (!Auth::guest())
					<div class="editable" data-url="{{route('backend.posts.updateSingle', $post->id)}}" data-name="content">{{$post->content}}</div>
				@else
					{{$post->content}}
				@endif

				<footer>
					Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
					Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
					<div class="clearfix"></div>

					@if (count($post->gallery) > 0)
						<hr>
						<div id="gallery" style="margin-top: 20px;">
							<h3>Galerija slik</h3>
							@foreach($post->gallery as $index => $image)
								@if ($index == 0 or $index % 4 == 0)
									<div class="row">
								@endif
								<div class="col-md-3">
									<a href="{{$image->folder.'/'.$image->filename}}" class="thumbnail fancybox post-gallery-image @if ($index > 0)visible-lg visible-md@endif" rel="{{$post->id}}">
										<img src="{{$image->folder.'/'.$image->filename}}" alt="">
									</a>
								</div>
								@if ($index == (count($post->gallery) - 1) or $index % 4 == 3)
									</div>
								@endif
							@endforeach
						</div>
					@endif
				</footer>

				<hr>
				<div class="comments">
					<div id="disqus_thread"></div>
				</div>
			</article>

		</div>
	</div>
@stop