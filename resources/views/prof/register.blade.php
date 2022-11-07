<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="loginprof/fonts/icomoon/style.css">

    <link rel="stylesheet" href="loginprof/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="loginprof/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="loginprof/css/style.css">

    <title>معلم</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="loginprof/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>تسجيل الدخول</h3>
              <p class="mb-4"></p>
            </div>
            <form method="POST" action="{{ route('saveprof') }}" enctype="multipart/form-data">
            @csrf


            <div class="form-group first">
                <label for="username">الإسم واللقب</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>


              <div class="form-group first">
                <label for="username">بريد الالكتروني</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>
              <br>

              <div class="form-group first">
                <label for="username"> صورة</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" required autocomplete="image" autofocus>
                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>


              <div class="form-group last mb-4">
                <label for="password">كلمة المرور</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="password" autofocus>
                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>

              <div class="form-group last mb-4">
                <label for="password">تأكيد كلمة المرور</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  required autocomplete="password" autofocus>
                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="تسجيل الدخول" class="btn btn-block btn-primary">

              
              	<br>
				<center>	<h3>لديك حساب؟</h3></center>
<br>
<div class="container-login100-form-btn">
				<center>		<a href="{{route('prof.login')}}">  <h3>       تسجيل الدخول</h3>     </center>
						 
						</a>
					</div>

             
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="loginprof/js/jquery-3.3.1.min.js"></script>
    <script src="loginprof/js/popper.min.js"></script>
    <script src="loginprof/js/bootstrap.min.js"></script>
    <script src="loginprof/js/main.js"></script>
  </body>
</html>