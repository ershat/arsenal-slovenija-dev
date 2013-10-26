@extends('Website::master')

@section('app')
	<div class="container">
		<div class="col-md-12">

			<article>

				<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

				<header>
					<h3>{{$post->title}}</h3>					
				</header>

				<aside>{{$post->summary}}</aside>
				
				@if (!empty($post->photo))
					<img src="{{display_post_image($post->photo, 'big_')}}" class="article-image thumbnail">
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