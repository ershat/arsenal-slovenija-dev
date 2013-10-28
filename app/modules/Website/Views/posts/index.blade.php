@extends('Website::master')

@section('app')
	<div class="container">
		<div class="col-md-12">

			<article>

				<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

				<header>
					<h3>{{$post->title}}</h3>					
				</header>

				@if (!empty($post->summary))
					<aside>{{$post->summary}}</aside>
				@else
					<aside>{{Str::limit(strip_tags($post->content), 100, '...')}}</aside>
				@endif
				
				@if (!empty($post->photo))
					<img src="{{display_post_image($post->photo, '')}}" class="article-image thumbnail">
				@endif

				{{$post->content}}

				<footer>
					Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
					Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
				</footer>

				<hr>
				<div class="comments">
					<div id="disqus_thread"></div>
				</div>
			</article>

		</div>
	</div>
@stop