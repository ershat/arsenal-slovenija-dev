<!doctype html>
<html>
	<head>
		<title>Login to the backend</title>
		<meta charset="utf-8">
		@include('Backend::_partials.head')
	</head>
	<body>
		
		<div class="col-md-4 col-md-offset-4">
			
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Login to the backend</h1>					
				</div>
			</div>

			{{Form::open(array('route' => 'sessions.store'))}}

				@if (Session::has('flash_message'))
					<div class="alert alert-danger">{{Session::get('flash_message')}}</div>
				@endif

				<div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			  	<input type="submit" class="btn btn-block" value="Login">
			  </div>
			{{Form::close()}}

		</div>

		@include('Backend::_partials.scripts')
	</body>
</html>