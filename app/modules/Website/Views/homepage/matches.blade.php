<div class="result-widget">
	<div class="left">
  	<div class="team-logo">
			<!-- <img width="85" height="85" src="/images/uploads/borussia.png" class="attachment-post-thumbnail wp-post-image" alt="bvb" style="height: auto;"> -->
      <span class="editable-image" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="home_team_image">
        @if (empty($last->home_team_image))
          (empty)
        @else
          {{$last->home_team_image}}
        @endif
      </span>
    </div> <!-- End .team-logo -->
    <div class="team-name">
    	<h3 class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="home_team">{{$last->home_team}}</h3>
    </div> <!-- End .team-name -->
  </div> <!-- End .left -->

  <div class="middle">
  	<p><span class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="home_goals">{{$last->home_goals}}</span> - <span class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="away_goals">{{$last->away_goals}}</span></p>
  </div> <!-- End .middle -->

  <div class="right">
  	<div class="team-logo">
    	<!-- <img width="73" height="84" src="/images/uploads/Arsenal_FC.svg" class="attachment-post-thumbnail wp-post-image" alt="arsenal-crest" style="height: auto;"> -->
      <span class="editable-image" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="away_team_image">
        @if (empty($last->away_team_image))
          (empty)
        @else
          {{$last->away_team_image}}
        @endif
      </span>
    </div> <!-- End .team-logo -->
    <div class="team-name">
    	<h3 class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $last->id)}}" data-name="away_team">{{$last->away_team}}</h3>
    </div> <!-- End .team-name -->
  </div> <!-- End .right -->
</div>

<div class="clearfix"></div>

<strong class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="match_date">{{$next->match_date}}</strong><br>

<div class="result-widget next">
	<div class="left">
  	<div class="team-logo">
			<!-- <img width="85" height="85" src="/images/uploads/man_united.png" class="attachment-post-thumbnail wp-post-image" alt="bvb" style="height: auto;"> -->
      <span class="editable-image" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="home_team_image">
        @if (empty($next->home_team_image))
          (empty)
        @else
          {{$next->home_team_image}}
        @endif
      </span>
    </div> <!-- End .team-logo -->
    <div class="team-name">
      <h3 class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="home_team">{{$next->home_team}}</h3>
    </div> <!-- End .team-name -->
  </div> <!-- End .left -->

  <div class="middle">
    <p><span class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="home_goals">{{$next->home_goals}}</span> - <span class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="away_goals">{{$next->away_goals}}</span></p>
  </div> <!-- End .middle -->

  <div class="right">
  	<div class="team-logo">
    	<!-- <img width="73" height="84" src="/images/uploads/Arsenal_FC.svg" class="attachment-post-thumbnail wp-post-image" alt="arsenal-crest" style="height: auto;"> -->
      <span class="editable-image" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="away_team_image">
        @if (empty($next->away_team_image))
          (empty)
        @else
          {{$next->away_team_image}}
        @endif
      </span>
    </div> <!-- End .team-logo -->
    <div class="team-name">
      <h3 class="editable" data-url="{{route('backend.matchSnippets.updateSingle', $next->id)}}" data-name="away_team">{{$next->away_team}}</h3>
    </div> <!-- End .team-name -->
  </div> <!-- End .right -->
</div>

<div class="clearfix"></div>