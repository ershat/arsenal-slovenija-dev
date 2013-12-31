@if (isset($last))
  <div class="result-widget">
  	<div class="left">
    	<div class="team-logo">
        <img src="/images/matches/{{$last->home_team_image}}" alt="" style="height: 86px;">
      </div> <!-- End .team-logo -->
      <div class="team-name">
      	<h3>{{$last->home_team}}</h3>
      </div> <!-- End .team-name -->
    </div> <!-- End .left -->

    <div class="middle">
    	<p>{{$last->home_goals}} - {{$last->away_goals}}</p>
    </div> <!-- End .middle -->

    <div class="right">
    	<div class="team-logo">
        <img src="/images/matches/{{$last->away_team_image}}" alt="" style="height: 86px;">
      </div> <!-- End .team-logo -->
      <div class="team-name">
      	<h3>{{$last->away_team}}</h3>
      </div> <!-- End .team-name -->
    </div> <!-- End .right -->
  </div>
@endif

<div class="clearfix"></div>

@if (isset($next))
  <strong>{{date('d.m.Y', strtotime($next->time))}} ob {{date('H:i', strtotime($next->time))}}</strong><br>

  <div class="result-widget next">
  	<div class="left">
    	<div class="team-logo">
        <img src="/images/matches/{{$next->home_team_image}}" alt="" style="height: 86px;">
      </div> <!-- End .team-logo -->
      <div class="team-name">
        <h3>{{$next->home_team}}</h3>
      </div> <!-- End .team-name -->
    </div> <!-- End .left -->

    <div class="middle">
      <p>{{$next->home_goals}} - {{$next->away_goals}}</p>
    </div> <!-- End .middle -->

    <div class="right">
    	<div class="team-logo">
        <img src="/images/matches/{{$next->away_team_image}}" alt="" style="height: 86px;">
      </div> <!-- End .team-logo -->
      <div class="team-name">
        <h3>{{$next->away_team}}</h3>
      </div> <!-- End .team-name -->
    </div> <!-- End .right -->
  </div>
@endif

<div class="clearfix"></div>