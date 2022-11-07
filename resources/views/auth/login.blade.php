<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>تسجيل</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="loginkidds/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="loginkidds/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="loginkidds/images/registration-form-8.jpg" alt="">
			</div>
			<div class="form-inner">
				<form  method="POST" action="{{ route('login') }}"    >
                @csrf
					<div class="form-header">
						<h3>تسجيل الدخول</h3>
						<img src="loginkidds/images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					
					<div class="form-group">
						<label for=""> <strong> البريد الإلكتروني:  </strong> </label>
						<input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" >{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
					<div class="form-group" >
						<label for=""> <strong>  كلمة المرور:  </strong></label>
						<input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                   
                
					<button type="submit" >تسجيل الدخول
</button>
<br>
<center>	<h3>ليس لديك حساب؟</h3></center>
<br>
<div class="container-login100-form-btn">
				<center>	<a href="{{route('register')}}">  <h3>       تسجيل</h3>  </center>	   
						 
						</a>
					</div>
					<br>
                    <br>
				</form>
			</div>
      
		</div>
		
		<script src="loginkidds/js/jquery-3.3.1.min.js"></script>
		<script src="loginkidds/js/jquery.form-validator.min.js"></script>
		<script src="loginkidds/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>