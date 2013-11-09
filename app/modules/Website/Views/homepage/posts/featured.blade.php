<section class="primary">
	<div id="carousel-featured" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	@foreach($featured as $index => $post)
				<li data-target="#carousel-featured" data-slide-to="{{$index}}" @if($index == 0)class="active"@endif></li>
	  	@endforeach
	  </ol>

	  <div class="carousel-inner">
	  	@foreach($featured as $index => $post)
	      <a href="{{route('posts.show', $post->slug)}}" class="item @if($index == 0)active@endif" style="width: 100%; height: 350px; oveflow: hidden;">
	        <img src="{{display_post_image($post->photo, 'big_')}}" alt="...">
	        <div class="carousel-caption">
	          <h4>{{$post->title}}</h4>

						Objavljeno: {{date('d.m.Y H:i', strtotime($post->created_at))}} | 
						Avtor: @if (!empty($post->author_alias)) {{$post->author_alias}} @else {{$post->post_author->username}} @endif
	        </div>
	      </a>
      @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-featured" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-featured" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</section>
