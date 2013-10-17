<nav class="navbar navbar-default" role="navigation">
	
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
      <li class="active"><a href="/backend">Home</a></li>
      <li><a href="/backend/pages">Pages</a></li>
      <li><a href="/backend/posts">Posts</a></li>
      <li><a href="/backend/snippets">Snippets</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->

  <p class="navbar-text pull-right">
  	Signed in with {{Auth::user()->email}}
		<a href="/logout">(logout)</a>
  </p>

</nav>