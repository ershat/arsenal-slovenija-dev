@foreach($posts as $index => $post)
	<section class="secondary">
	  <div class="article-image">
			<img src="{{display_post_image($post->photo, 'sm_')}}" class="thumbnail">
			<a href="{{route('posts.show', $post->slug)}}">
				<span>{{$post->title}}</span>
			</a>
		</div>

		<div class="article-info">
	    <h2 style="font-size: 1.1em;">
	    	<a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a>
	    </h2>
	    <p>
	    	<span style="color: #999; font-size: .9em;">
	    	Objavljeno: {{date('d.m.Y H:i', strtotime($post->created_at))}} | 
	    	Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
	    	</span>
				<br>
	    	@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
	    		{{$post->summary}}
	    	@else
					{{Str::limit(strip_tags($post->content), 150, '...')}}
	    	@endif

	    	<a href="{{route('posts.show', $post->slug)}}">Preberi več &raquo;</a>a
	    </p>
		</div>
	</section>
@endforeach