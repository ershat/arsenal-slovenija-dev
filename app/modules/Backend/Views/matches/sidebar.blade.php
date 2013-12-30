<a href="{{route('backend.matches.create')}}" class="btn btn-block btn-success">
	Create new
	<span class="glyphicon glyphicon-plus"></span>
</a>

{{fake_row()}}

{{Form::open(['method' => 'GET'])}}
  <input type="search" class="form-control form-search" placeholder="Search..." name="q" @if (Request::has('q')) value="{{Request::get('q')}}" @endif>
{{Form::close()}}

{{fake_row()}}

<ul class="list-group">
	@foreach($matches as $index => $post)
		<li class="list-group-item">
			<a href="{{route('backend.matches.show', $post->id)}}?page={{$matches->getCurrentPage()}}@if (Request::has('q'))&q={{Request::get('q')}}@endif">{{$match->home_team}} {{$match->away_team}} ({{$match->time}})</a><br>
		</li>
	@endforeach
</ul>	

@if (Request::has('q'))
	{{$matches->appends(array('q' => Request::get('q')))->links()}}
@else
	{{$matches->links()}}	
@endif		
