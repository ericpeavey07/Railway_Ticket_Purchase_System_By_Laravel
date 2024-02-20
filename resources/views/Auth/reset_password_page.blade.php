
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>BANGLADESH RAILWAY E-TICKET</title>

	<!-- Google font -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=PT+Sans:400') }}" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style2.css') }}" />

	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">

<!-- jQuery library -->
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>

<script src="{{ asset('bootstrap.bundle.min.js') }}"></script>


<!-- Latest compiled JavaScript -->
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="booking" class="section">
	<nav class="navbar navbar-inverse">

  <div class="container-fluid">
  
    <div class="navbar-header">

      <a class="navbar-brand" href="{{ Url('/') }}">Bangladesh Railway</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="{{ Url('/') }}">Home</a></li>
	  <li class=""><a href="#">Verify Ticket</a></li>
	  <li class=""><a href="#">Contact us</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ Url('/sign-up') }}" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="{{ Url('/login') }}" ><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
    </ul>
  </div>
</nav>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
	
</script>
	<div class="btn pull-right">
			</div>
		<div class="section-center">
		
			<div class="container">
		
				<div class="row">
					<div class="booking-form">
						<form method="post" action="{{ Url('/user/reset-password/confirm') }}">
								@csrf
							
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label"><font color="">New Password</font></span>
                                       <input type="password" class="form-control" placeholder="Enter New Password" name="new_password" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                    <span class="form-label">Confirm Password</font></span>
                                       <input type="password" class="form-control" placeholder="Enter Confirm Password" name="confirm_password" required>
									</div>
								</div>
							</div>
							
							<div class="row">
								
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Submit</button>
									</div>
								</div>
							</div>
						</form>
						<br>

					</div>
					
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>