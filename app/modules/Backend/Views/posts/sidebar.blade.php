<a href="{{route('backend.posts.create')}}" class="btn btn-block btn-success">
	Create new
	<span class="glyphicon glyphicon-plus"></span>
</a>

{{fake_row()}}

<ul class="list-group">
	@foreach($posts as $index => $post)
		<li class="list-group-item">
			<a href="{{route('backend.posts.show', $post->id)}}?page={{$posts->getCurrentPage()}}">{{$post->title}}</a><br>
		</li>
	@endforeach
</ul>	

{{$posts->links()}}