<h4>Lestvica</h4>

<table class="table table-hover" id="standings">
	<tbody>
		@foreach($standings as $index => $standing)
			<tr @if ($standing->team == 'Arsenal') class="my-team" @endif>
				<td>{{$index+1}}</td>
				<td>{{$standing->team}}</td>
				<td>{{$standing->played}}</td>
				<td>{{$standing->points}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

<a href="/lestvica" class="btn btn-danger btn-xs pull-right">Poglej polno lestvico</a>

<div class="clearfix"></div>

<hr>
