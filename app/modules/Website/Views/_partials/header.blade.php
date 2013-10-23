<div class="navigation">
  <nav class="navbar navbar-default container" role="navigation">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-header">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('/assets/module/website/images/logo-white.png')}}" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-header">
      <ul class="nav navbar-nav">
        <li><a href="/">Naslovnica</a></li>
        @foreach($navigation as $index => $item)
          <li>
            <a href="@if(!empty($item->subtitle)){{$item->subtitle}}" target="_blank"@else/{{$item->slug}}"@endif>{{$item->title}}</a>
          </li>
        @endforeach
      </ul>

    </div><!-- /.navbar-collapse -->

  </nav>
</div>