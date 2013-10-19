@extends('Website::master')

@section('app')
	<div class="container">

		<div class="col-md-8">
			<h3>{{$page->title}}</h3>

			{{$page->content}}
		</div>

		<div class="col-md-4">
			
			@if (count($page->children))
				<div class="link-list">
					<h4>Preberi več...</h4>
					<ul>
						@foreach($page->children as $index => $subpage)
							<li>
								<a href="/{{$page->slug}}/{{$subpage->slug}}">{{$subpage->title}}</a>
							</li>
						@endforeach
					</ul>					
				</div>
			@endif

		</div>

	</div>

@stop