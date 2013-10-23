@extends('Website::master')

@section('app')
	<div class="container">
		<div class="col-md-12">

			<article>

				<header>
					<h3>{{$post->title}}</h3>					
				</header>

				<aside>{{$post->summary}}</aside>
				
				@if (!empty($post->photo))
					<div class="article-image">
						<img src="{{display_post_image($post->photo, 'med_')}}">
					</div>
				@endif

				{{$post->content}}

				<footer>
					Objavljeno: {{date('d.m.Y', strtotime($post->created_at))}} | 
					Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
				</footer>
			</article>

		</div>
	</div>
@stop