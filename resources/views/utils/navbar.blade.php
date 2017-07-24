<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
	<button class="navbar-toggler navbar-toggler-right hidden-lg-up"
		type="button" data-toggle="collapse"
		data-target="#navbarsExampleDefault"
		aria-controls="navbarsExampleDefault" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('/devices') }}">Devices</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('/lights') }}">Lights</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('/docs') }}">Documentation</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('/users') }}">Users</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profile</a></li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>