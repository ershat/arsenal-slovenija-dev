<div class="inner">
  <div class="live-match-info">
    <p>            
      <span class="time">{{date('d.m.Y', strtotime($match->time))}} ob {{date('H:i', strtotime($match->time))}}</span>
    </p>

    <figure class="competition">{{$match->competition}}</figure>
            
  </div>
  <!--/live-match-info -->
  <div class="live-match-fixture">
    <figure class="stadium">
      <img alt="Bendtner goal" src="/assets/module/website/images/default_post_image.jpg">
      <div class="stadium-mask"></div>
    </figure>
    <div class="versus score">
      <table>
        <tbody>
        	<tr>
            <td class="crest"><img src="/images/matches/{{$match->home_team_image}}"></td>
            <td class="right club-name">
              {{$match->home_team}}
            </td>
            <td class="score">
              <table>
                <tbody>
                	<tr>
                    <td class="red">{{$match->home_goals}}</td>
                    <td class="grey">-</td>
                    <td>{{$match->away_goals}}</td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td class="left club-name">{{$match->away_team}}</td>
            <td class="crest right"><img src="/images/matches/{{$match->away_team_image}}"></td>
          </tr>
        </tbody>
      </table>
      <p class="scorers">
        {{$match->scorers}}
      </p>
    </div>
    <!--/versus score -->

  </div>
</div>