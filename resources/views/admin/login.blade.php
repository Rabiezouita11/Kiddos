<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrateur</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginadmin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginadmin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginadmin/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginadmin/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form class="login100-form validate-form"  method="POST" action="{{ route('admin.login') }}">
				@csrf
					<span class="login100-form-title p-b-43">
					تسجيل الدخول للمتابعة
					</span>
					
					<center>
            @if (session('success'))
        <div class="alert alert-success" style="font-size : 25px ;">
        {{session('success')}}

        </div>
        @endif
        </center>
					<div>

					<strong><label for="">بريدك الإلكتروني  :</label></strong>	
					<br>

						<input  type="email" name="email" placeholder="بريدك الإلكتروني" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					
						<span class="label-input100">Email</span>
						 @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>
					<br>
					<br>					
					<div  >
						<strong><label for="">كلمة السر :</label></strong>
						<input  type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="password" autofocus>

						<span class="label-input100">Password</span>
						 @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

					
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						تسجيل الدخول
						</button>
					</div>
					
				
					<br>
				<center>	<h3>ليس لديك حساب؟</h3></center>
<br>
<div class="container-login100-form-btn">
						<a href="{{route('registerr')}}">  <h3>       تسجيل</h3>     
						 
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('loginadmin/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="loginadmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/vendor/bootstrap/js/popper.js"></script>
	<script src="loginadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginadmin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginadmin/js/main.js"></script>

</body>
</html>