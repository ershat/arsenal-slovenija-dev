@extends('Website::master')

@section('app')
	<div class="container">
		<div class="col-md-12">

			<article>

				<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

				<header>
					<h3>{{$post->title}}</h3>
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

					@if (!empty($post->summary))
						{{$post->summary}}
					@else
						{{Str::limit(strip_tags($post->content), 100, '...')}}
					@endif
				</aside>
				
				@if (!empty($post->photo))
					<img src="{{display_post_image($post->photo, '')}}" class="article-image thumbnail">
				@endif

				{{$post->content}}

				<footer>
					Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
					Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
					<div class="clearfix"></div>
				</footer>

				<hr>
				<div class="comments">
					<div id="disqus_thread"></div>
				</div>
			</article>

		</div>
	</div>
@stop