<!DOCTYPE html>
<head>
<title>Admin Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<link rel="shortcut icon" href="{{ asset('frontend/images/home/favicon.ico')}}">
<!-- Custom CSS -->
<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In ADMIN PAGE</h2>
	<form action="{{URL::to('/admin-dashboad')}}" method="POST">
		{{ csrf_field() }}
		<input type="email" class="ggg" name="admin_email" placeholder="Enter your email..." required="">
		<input type="password" class="ggg txt_pass" name="admin_password" placeholder="Entrer your password..." required="" value="">
		<span><input type="checkbox" id="check" />Show password</span>
		<h6><a href="#">Forgot Password?</a></h6>
		<div class="clearfix"></div>
		<input type="submit" value="Sign In" name="login">
	</form>
</div>
</div>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		if ($('.txt_pass').attr('value') != ''){
            $('.txt_pass').attr('value') = '';
        }
        $('#check').click(function(){
            $(this).is(':checked') ? $('.txt_pass').attr('type', 'text') : $('.txt_pass').attr('type', 'password');
        });
    });
</script>
</body>
</html>
