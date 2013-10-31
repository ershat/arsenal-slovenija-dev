@extends('Website::master')

@section('app')
	<div class="container page">

		<div class="col-md-8">
			@if (!Auth::guest())
				<h3 class="editable" data-url="{{route('backend.pages.updateSingle', $page->id)}}" data-name="title">{{$page->title}}</h3>
			@else
				<h3>{{$page->title}}</h3>
			@endif

			@if (!Auth::guest())
				<div class="editable" data-url="{{route('backend.pages.updateSingle', $page->id)}}" data-name="content">{{$page->content}}</div>
			@else
				{{$page->content}}
			@endif
		</div>

		<div class="col-md-4">

			<!-- always display the first page children -->
			@if (count($pages[0]->children))
				<div class="link-list">
					<h4>Preberi več...</h4>
					<ul>
						@foreach($pages[0]->children as $index => $subpage)
							<li>
								<a href="/{{$pages[0]->slug}}/{{$subpage->slug}}">{{$subpage->title}}</a>
							</li>
						@endforeach
					</ul>					
				</div>
			@endif

		</div>

	</div>

@stop