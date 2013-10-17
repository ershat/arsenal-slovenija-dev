<a href="{{route('backend.pages.create')}}" class="btn btn-block btn-primary">
	Create new
	<span class="glyphicon glyphicon-plus"></span>
</a>

{{fake_row()}}

<ul class="list-group">
	@foreach($pages as $index => $page)
		<li class="list-group-item">
			<a href="{{route('backend.pages.show', $page->id)}}">
				{{$page->title}}
			</a>
		</li>
	@endforeach
</ul>