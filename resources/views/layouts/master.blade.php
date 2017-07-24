<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Automation</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ url('/') }}/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    	@include('utils.navbar')

	    <div class="container-fluid">
	      <div class="row">
	      
	      @if ($controller_name == 'Home')
	      	@yield('menu')
	        
	        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	      @else
	        <div class="container">
	      @endif
	      
	          <h2>{{$title}} - {{$controller_name}} => {{Route::currentRouteAction()}} - {{url()->current()}}</h2>
	          @if (isset($description))
	          	<div>{{$description}}</div>
	          @endif
	          <div class="table-responsive">
	            @yield('content')
	          </div>
	          
	      @if ($controller_name == 'Home')
	        </main>
          @else
        	</div>
	      @endif
	        
	      </div>
	    </div>
	
  </body>
</html>