<div class="container">
	<ol class="breadcrumb">
	  <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home"></span></a></li>
	  <?php $breadcrumbLink = ''; ?>
	  @foreach($pages as $index => $page)
	  	<?php $breadcrumbLink .= '/' . $page->slug ?>
	  	@if ($index == count($pages) - 1)
		  	<li class="active">
		  		{{$page->title}}
		  	</li>
	  	@else
				<li>
					<a href="{{$breadcrumbLink}}">{{$page->title}}</a>
				</li>
			@endif
	  @endforeach
	</ol>
</div>