<h4>Zadnje s foruma</h4>

@foreach($forumPosts as $index => $post)
	@if ($index < 5)
		<strong>{{$post->member_name}}</strong> - {{$post->post_date->format('H:i')}} <br>
		<a href="{{$post->link}}" target="_blank">
			{{$post->title}}... <span class="glyphicon glyphicon-hand-right"></span>	
		</a><br>
	@endif
@endforeach

<div class="hiddenForumPosts">
	@foreach($forumPosts as $index => $post)
		@if ($index > 5)
			<strong>{{$post->member_name}}</strong> - {{$post->post_date->format('H:i')}} <br>
			<a href="{{$post->link}}" target="_blank">
				{{$post->title}}... <span class="glyphicon glyphicon-hand-right"></span>	
			</a><br>
		@endif
	@endforeach	
</div>

<br>

<a href="#" class="hiddenForumControl btn btn-danger btn-xs pull-right" title="Pokaži več...">
	<div class="hiddenForumControlShow">
		Prikaži več
		<span class="glyphicon glyphicon-chevron-down"></span>		
	</div>
	<div class="hiddenForumControlHide">
		Zapri
		<span class="glyphicon glyphicon-chevron-up"></span>		
	</div>
</a>

<div class="clearfix"></div>

<hr>