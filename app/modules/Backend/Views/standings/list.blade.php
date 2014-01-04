<table class="table table-hover">
	<thead>
		<tr>
			<th>Team</th>
			<th>Played</th>
			<th>Won</th>
			<th>Drawn</th>
			<th>Lost</th>
			<th>For</th>
			<th>Against</th>
			<th>Points</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($standings as $index => $standing)
			<tr>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="team">{{$standing->team}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="played">{{$standing->played}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="won">{{$standing->won}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="drawn">{{$standing->drawn}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="lost">{{$standing->lost}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="for">{{$standing->for}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="against">{{$standing->against}}</a></td>
				<td><a href="#" class="editable" data-url="{{route('backend.standings.updateSingle', $standing->id)}}" data-name="points">{{$standing->points}}</a></td>
				<td>
					{{Form::open(array('route' => ['backend.standings.destroy', $standing->id], 'method' => 'delete'))}}
						<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
					{{Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>