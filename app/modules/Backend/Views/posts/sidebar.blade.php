<a href="{{route('backend.posts.create')}}" class="btn btn-block btn-success">
	Create new
	<span class="glyphicon glyphicon-plus"></span>
</a>

{{fake_row()}}

{{Form::open(['method' => 'GET'])}}
  <input type="search" class="form-control form-search" placeholder="Search..." name="q" @if (Request::has('q')) value="{{Request::get('q')}}" @endif>
{{Form::close()}}

{{fake_row()}}

<ul class="list-group">
	@foreach($posts as $index => $post)
		<li class="list-group-item">
			<a href="{{route('backend.posts.show', $post->id)}}?page={{$posts->getCurrentPage()}}@if (Request::has('q'))&q={{Request::get('q')}}@endif">{{$post->title}}</a><br>
		</li>
	@endforeach
</ul>	

@if (Request::has('q'))
	{{$posts->appends(array('q' => Request::get('q')))->links()}}
@else
	{{$posts->links()}}	
@endif		
