<div class="col-md-4">

	@if (count($errors->all()) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{$error}} <br>
			@endforeach
		</div>
	@endif

	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('subtitle', 'Subtitle')}}
		{{Form::text('subtitle', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('position', 'Position')}}
		{{Form::input('number', 'position', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('parent_id', 'Parent')}}
		@if (isset($page->parent_id))
			{{Form::select('parent_id', $pagesSelect, $page->parent_id, array('class' => 'form-control'))}}
		@else
			{{Form::select('parent_id', $pagesSelect, null, array('class' => 'form-control'))}}
		@endif
	</div>

	<div class="form-group">
		{{Form::label('template', 'Template path')}}
		{{Form::text('template', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('summary', 'Summary')}}
		{{Form::textarea('summary', null, array('class' => 'form-control', 'rows' => '6'))}}
	</div>	

</div>

<div class="col-md-8">
	<div class="form-group">
		{{Form::label('content', 'Content')}}
		{{Form::textarea('content', null, array('class' => 'form-control', 'rows' => '20'))}}
	</div>
</div>

<div class="clearfix"></div>