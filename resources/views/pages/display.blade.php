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
	      <div class="navbar-brand">
	      	<a href="{{ url('/') }}"><span class="glyphicon glyphicon-arrow-left"></span></a>
	      </div>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">About</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="header">
		<div class="container">
			<div class="product-title">
				{{ $proname }}
			</div>
		</div>
	</div>
	<div class="display">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="percentage pos">
						{{ round($p_pos) }}%
					</div>
					<div class="count pos">
						{{ $c_pos }} positive reviews
					</div>
				</div>
				<div class="col-md-6">
					<div class="percentage neg">
						{{ round($p_neg) }}%
					</div>
					<div class="count neg">
						{{ $c_neg }} negative reviews
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer navbar-fixed-bottom">
		Powered by <a href="http://amazon.in">Amazon.in</a>
	</div>
</body>
</html>