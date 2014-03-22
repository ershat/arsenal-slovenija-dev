@extends('Website::master')

@section('app')

	<div class="col-md-12">
		
		<h2>Premier Liga</h2>

		<div class="row">

			<div class="col-md-12">
				<div class="panel panel-default">
				  <div class="panel-heading">Lestvica</div>
				  <div class="panel-body">
				    <table class="table table-hover" id="standings">

				    	<thead>
				    		<tr>
				    			<th>#</th>
				    			<th>Ekipa</th>
				    			<th>Tekme</th>
				    			<th>Zmage</th>
				    			<th>Remiji</th>
				    			<th>Porazi</th>
				    			<th>Dani goli</th>
				    			<th>Prejeti goli</th>
				    			<th>+/-</th>
				    			<th>Točke</th>
				    		</tr>
				    	</thead>

				    	@if ($standings)
				    	<tbody>
				    		@foreach($standings as $index => $team)
				    			<tr @if ($team['name'] == 'Arsenal') class="my-team" @endif>
				    				<td>{{$team['position']}}</td>
				    				<td>{{$team['name']}}</td>
				    				<td>{{$team['played']}}</td>
				    				<td>{{$team['won']}}</td>
				    				<td>{{$team['drawn']}}</td>
				    				<td>{{$team['lost']}}</td>
				    				<td>{{$team['for']}}</td>
				    				<td>{{$team['against']}}</td>
				    				<td>{{$team['goalDifference']}}</td>
				    				<td>{{$team['points']}}</td>
				    			</tr>
				    		@endforeach
				    	</tbody>
				    	@endif
				    </table>
				  </div>
				</div>
			</div>
		</div>

	</div>
@stop