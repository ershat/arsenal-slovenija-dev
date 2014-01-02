@extends('Website::master')

@section('meta-tags')

	@if ($match->home_team == 'Arsenal')
		<meta property="og:image" content="/images/matches/{{$match->away_team_image}}"/>
		<meta name="twitter:image" content="/images/matches/{{$match->away_team_image}}">
	@else
		<meta property="og:image" content="/images/matches/{{$match->home_team_image}}"/>
		<meta name="twitter:image" content="/images/matches/{{$match->home_team_image}}">
	@endif

	<meta property="og:title" content="{{$match->home_team}} - {{$match->away_team}} - {{date('d.m.Y', strtotime($match->time))}} - Arsenal Slovenija"/>
	<meta property="og:site_name" content="Arsenal Slovenija"/>
	<meta property="og:type" content="blog"/>

	<meta property="og:description" content="{{$match->home_team}} - {{$match->away_team}} - {{date('d.m.Y', strtotime($match->time))}}" />	
	<meta name="twitter:description" content="{{$match->home_team}} - {{$match->away_team}} - {{date('d.m.Y', strtotime($match->time))}}">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="{{$match->home_team}} - {{$match->away_team}} - {{date('d.m.Y', strtotime($match->time))}} - Arsenal Slovenija">

@stop

@section('app')

	<div class="container">
		<div class="col-md-12">

			<article>

				<header>
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
	                      <td class="right club-name">{{$match->home_team}}</td>
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

	            </div>
	            <!--/versus score -->

		        </div>
					</div>
				</header>

				<aside>
					<a href="{{URL::previous()}}">&laquo; Nazaj</a><br><br>

				  <a type="button" class="btn btn-primary btn-sm btn-block" href="#" onclick="{{display_fb_share_link($match->home_team .' - '. $match->away_team . ' - '. date('d.m.Y', strtotime($match->time)))}}">
				  	Deli na Facebook
				  </a>
				  <a type="button" class="btn btn-info btn-sm btn-block" href="#" onclick="{{display_tw_share_link($match->home_team .' - '. $match->away_team . ' - '. date('d.m.Y', strtotime($match->time)))}}">
				  	Deli na Twitter
				  </a>
				  <a type="button" class="btn btn-danger btn-sm btn-block" href="#" onclick="{{display_gplus_share_link($match->home_team .' - '. $match->away_team . ' - '. date('d.m.Y', strtotime($match->time)))}}">
				  	Deli na Google+
				  </a>
				  <div class="clearfix"></div><br>

				</aside>
				
				<hr>

				<h3>Novice</h3>

				@foreach($match->posts as $index => $post)
					<section class="secondary">
					  <div class="article-image">
							<img src="{{display_post_image($post->photo, 'sm_')}}" class="thumbnail">
							<a href="/novice/{{$post->slug}}">
								<span>{{$post->title}}</span>
							</a>    
						</div>

						<div class="article-info">
					    <h2>
					    	<a href="/novice/{{$post->slug}}">{{$post->title}}</a>
					    </h2>
					    <p>
					    	@if (!empty($post->summary) and !Str::contains($post->summary, '<img'))
					    		{{$post->summary}}
					    	@else
									{{Str::limit(strip_tags($post->content), 150, '...')}}
					    	@endif

					    	<a href="/novice/{{$post->slug}}">Preberi več &raquo;</a>
					    </p>
						</div>
					</section>
				@endforeach

				<hr>
				<div class="comments">
					<div id="disqus_thread"></div>
				</div>
			</article>

		</div>
	</div>
@stop