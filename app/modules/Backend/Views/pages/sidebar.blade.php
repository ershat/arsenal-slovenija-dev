<a href="{{route('backend.pages.create')}}" class="btn btn-block btn-success">
	Create new
	<span class="glyphicon glyphicon-plus"></span>
</a>

{{fake_row()}}

<ul class="list-group">
	@foreach($pages as $index => $page)
		<li class="list-group-item">
			<a href="{{route('backend.pages.show', $page->id)}}">{{$page->title}}</a><br>

			@if (count($page->children) > 0)
				<i>
					Subpages:
					@foreach($page->children as $index => $subpage)
						@if($index > 0)|@endif
						<a href="{{route('backend.pages.show', $subpage->id)}}">{{$subpage->title}}</a>
					@endforeach					
				</i>
			@endif
		</li>
	@endforeach
</ul>	