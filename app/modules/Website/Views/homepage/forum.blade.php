<h4>Zadnje s foruma</h4>

@foreach($forumPosts as $index => $post)
	<strong>{{$post->member_name}}</strong> - {{$post->post_date->format('H:i')}} <br>
	<a href="{{$post->link}}" target="_blank">
		{{$post->title}}... <span class="glyphicon glyphicon-hand-right"></span>	
	</a><br>
@endforeach
<hr>