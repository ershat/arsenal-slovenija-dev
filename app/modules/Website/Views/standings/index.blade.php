@extends('Website::master')

@section('app')

	<div class="col-md-12">
		
		<h2>Lestvica Premier Lige</h2>

		<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

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

			<tbody>
				@foreach($standings as $index => $standing)
					<tr @if ($standing->team == 'Arsenal') class="my-team" @endif>
						<td>{{$index+1}}</td>
						<td>{{$standing->team}}</td>
						<td>{{$standing->played}}</td>
						<td>{{$standing->won}}</td>
						<td>{{$standing->drawn}}</td>
						<td>{{$standing->lost}}</td>
						<td>{{$standing->for}}</td>
						<td>{{$standing->against}}</td>
						<td>{{($standing->for - $standing->against)}}</td>
						<td>{{$standing->points}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="clearfix"></div>

	</div>
@stop