<nav class="navbar navbar-default container" role="navigation">
	
	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-header">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">assc.dev</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-header">
    <ul class="nav navbar-nav">
      <li @if(Str::contains(Route::currentRouteName(), 'backend.home')) class="active" @endif>
        <a href="/backend">Home</a>
      </li>
      <li @if(Str::contains(Route::currentRouteName(), 'backend.pages')) class="active" @endif>
        <a href="/backend/pages">Pages</a>
      </li>
      <li @if(Str::contains(Route::currentRouteName(), 'backend.posts')) class="active" @endif>
        <a href="/backend/posts">Posts</a>
      </li>
      <li @if(Str::contains(Route::currentRouteName(), 'backend.snippets')) class="active" @endif>
        <a href="/backend/snippets">Snippets</a>
      </li>
    </ul>

  </div><!-- /.navbar-collapse -->

  <p class="navbar-text pull-right hidden-xs hidden-sm">
    Signed in with <strong>{{Auth::user()->email}}</strong> | 
    <a href="/logout">Logout</a>
  </p>


</nav>