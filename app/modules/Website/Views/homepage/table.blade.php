<h4>Lestvica Premier Lige</h4>

@if ($standings)
<table class="table table-hover" id="standings">
	<tbody>
		@foreach($standings as $index => $team)
			@if ($index < 10)
			<tr @if ($team['name'] == 'Arsenal') class="my-team" @endif>
				<td>{{$team['position']}}</td>
				<td>{{$team['name']}}</td>
				<td>{{$team['played']}}</td>
				<td>{{$team['points']}}</td>
			</tr>
			@endif
		@endforeach
	</tbody>
</table>

<a href="/premier-liga" class="btn btn-danger btn-xs pull-right">Poglej polno lestvico</a>
@else
	Napaka pri pridobivanju lestvice.
@endif

<div class="clearfix"></div>

<hr>
