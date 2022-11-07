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
			<div class="image-holdera">
				<img src="{{asset('images/aaa.jpg')}}" alt="">
			</div>
			<div class="form-inner">
				<form  method="POST" action="{{ route('register') }}"  enctype="multipart/form-data"  >
                @csrf
					<div class="form-header">
						<h3>اشتراك</h3>
						<img src="loginkidds/images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for=""> <strong> الإسم و اللقب: </strong> </label>
						<input type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" > {{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    </div>
					<div class="form-group">
						<label for=""> <strong> القسم : </strong> </label>
						<select name="classe" id="pet-select"  class="form-control"  required="required">
    <option value="">--الرجاء تحديد خيار--</option>
    <option  style="color:black;" value="السنة الأولى إبتدائي">السنة الأولى</option>
    <option style="color:black;" value="السنة الثانية إبتدائي">السنة الثانية</option>
    <option style="color:black;" value="السنة ثالثة إبتدائي">السنة ثالثة</option>
    <option style="color:black;" value="السنة رابعة إبتدائي">السنة رابعة</option>
    <option  style="color:black;" value="السنة خامسة إبتدائي">السنة خامسة</option>
    <option style="color:black;" value="السنة سادسة إبتدائي">السنة سادسة</option>
</select>
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
                    <div class="form-group" >
						<label for=""> <strong> تأكيد كلمة المرور:  </strong> </label>
						<input  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
                    <div class="form-group" >
						<label for="">  <strong> صورة:  </strong> </label>
						<input type="file"  name="image" class="form-control"  required>
						@error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;" >{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
    
					<button type="submit" >إنشاء حسابي</button>
					<br>
					<br>
				<center>	<h3>لديك حساب؟</h3></center>
<br>
<div class="container-login100-form-btn">
				<center>		<a href="{{route('login')}}">  <h3>       تسجيل الدخول</h3>     </center>
						 
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