@extends('Backend::posts.index')

@section('main')

	<p class="lead">Post ID: {{$post->id}}</p>

	<ul class="nav nav-tabs">
	  <li class="active"><a href="#base" data-toggle="tab">Base</a></li>
	  <li><a href="#gallery" data-toggle="tab">Gallery</a></li>
	</ul>

	<div class="tab-content">

	  <div class="tab-pane active" id="base">
	  	<br>
	  	{{Form::model($post, array('route' => array('backend.posts.update', $post->id), 'method' => 'PUT', 'files' => true))}}

	  		<div class="pull-right">		
	  			{{Form::submit('Update', array('class' => 'btn btn-primary'))}}
	  			<a href="#" class="btn btn-danger" data-toggle="confirm">Delete</a>
	  		</div>

	  		@include('Backend::posts.form')
	  	{{Form::close()}}

	  	{{Form::open(array('route' => array('backend.posts.destroy', $post->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
	  	{{Form::close()}}
	  </div>

	  <div class="tab-pane" id="gallery">

			<div id="list" style="margin-top: 10px;">
				<ul class="list-group">
					@foreach($post->gallery()->get() as $index => $image)
						<li class="list-group-item">
							<a href="{{asset($image->folder.'/'.$image->filename)}}" target="_blank">
								<img src="{{asset($image->folder.'/'.$image->filename)}}" alt="" class="thumbnail pull-left" style="height: 50px; margin-right: 10px;">
								{{$image->filename}}
							</a>
							{{Form::open(array('route' => array('backend.gallery.destroy', $image->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
								<button class="btn btn-danger btn-sm pull-right">
									<span class="glyphicon glyphicon-trash"></span>															
								</button>
							{{Form::close()}}
							<div class="clearfix"></div>
						</li>
					@endforeach
				</ul>
			</div>

	  	<div id="container" data-post-id="{{$post->id}}" style="margin-top: 10px;">
		  	<div id="filelist"></div>
		  	<br>
		  	<a id="pickfiles" href="#" class="btn btn-success" style="position: relative; z-index: 0;">Select files</a>
		  	<!--a id="uploadfiles" href="#" class="btn btn-success">Start upload</a-->
		  	<a class="btn btn-info" href="#" onclick="window.location.reload();">Refresh browser</a>	  		
	  	</div>
	  </div>
	</div>

	{{fake_row()}}
	{{fake_row()}}
@stop