@extends('Backend::master')

@section('app')
	<div class="container">

		<a href="{{route('backend.posts.create')}}" class="btn btn-success btn-lg btn-block">Create a new post</a>		

		<h3>Last 10 posts</h3>

		<div class="table-responsive">
			<table class="table table-hover">

				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th style="text-align: right;">Created at</th>
					</tr>
				</thead>

				<tbody>
					@foreach($posts as $index => $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>
								<a href="{{route('backend.posts.show', $post->id)}}">{{$post->title}}</a>
							</td>
							<td style="text-align: right;">{{date('d.m.Y H:i:s', strtotime($post->created_at))}}</td>
						</tr>
					@endforeach					
				</tbody>

			</table>
		</div>

	</div>
@stop