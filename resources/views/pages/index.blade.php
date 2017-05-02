<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>annodat</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--JQuery CDN-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<!--Custom Style Sheet-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/style.css') }}">

</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">About</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="header">
		<div class="container">
			<div class="logo" align="center">
				<img src="{{ URL::asset('img/logo.png') }}" class="img-responsive">
			</div>
		</div>
	</div>
	<div class="search">
		<div class="container">
			<div class="search-bar">
				<form action="{{ url('/search') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="input-group add-on">
				      <input class="form-control input-lg" placeholder="Search a Product" name="srch-term" id="srch-term" type="text">
				      <div class="input-group-btn">
				        <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				      </div>
				    </div>
				</form>
			</div>
		</div>
	</div>
	<div class="footer navbar-fixed-bottom">
		Powered by <a href="http://amazon.in">Amazon.in</a>
	</div>
</body>
</html>