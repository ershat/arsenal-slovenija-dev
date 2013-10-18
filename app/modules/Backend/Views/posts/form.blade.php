<div class="col-md-4">

	@if (count($errors->all()) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{$error}} <br>
			@endforeach
		</div>
	@endif

	{{Form::hidden('author', Auth::user()->id)}}

	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('subtitle', 'Subtitle')}}
		{{Form::text('subtitle', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('type', 'Post type')}}
		@if (isset($post->type))
			{{Form::select('type', $postTypes, $post->type, array('class' => 'form-control'))}}
		@else
			{{Form::select('type', $postTypes, null, array('class' => 'form-control'))}}
		@endif
	</div>

	<div class="form-group">
		{{Form::label('summary', 'Summary')}}
		{{Form::textarea('summary', null, array('class' => 'form-control', 'rows' => '4'))}}
	</div>	

	<div class="form-group">
		{{Form::label('photo', 'Photo')}}
		@if (isset($post->photo) and !empty($post->photo))
			<a href="{{asset('/images/posts/'.$post->photo)}}" target="_blank">View uploaded photo</a>
			| Delete {{Form::input('checkbox', 'delete_photo')}}
			<br>
		@endif
		{{Form::file('photo', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('author_alias', 'Author alias')}}
		{{Form::text('author_alias', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('tags', 'Tags')}}
		{{Form::text('tags', null, array('class' => 'form-control'))}}
	</div>

</div>

<div class="col-md-8">
	<div class="form-group">
		{{Form::label('content', 'Content')}}
		{{Form::textarea('content', null, array('class' => 'form-control', 'rows' => '20'))}}
	</div>
</div>

<div class="clearfix"></div>