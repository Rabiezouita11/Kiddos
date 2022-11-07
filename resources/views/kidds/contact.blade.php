<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kiddos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="kiddos/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="kiddos/css/animate.css">
    
    <link rel="stylesheet" href="kiddos/css/owl.carousel.min.css">
    <link rel="stylesheet" href="kiddos/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="kiddos/css/magnific-popup.css">

    <link rel="stylesheet" href="kiddos/css/aos.css">

    <link rel="stylesheet" href="kiddos/css/ionicons.min.css">
    
    <link rel="stylesheet" href="kiddos/css/flaticon.css">
    <link rel="stylesheet" href="kiddos/css/icomoon.css">
    <link rel="stylesheet" href="kiddos/css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Higher Institute of Humanities , Jendouba</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						 <a href="mailto:Kiddos.tun@gmail.com">   <span class="text" > Kiddos.tun@gmail.com</span></a>
					    </div>
					   
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{route('index')}}">Kiddos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> القائمة
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="{{route('index')}}" class="nav-link pl-0">الصفحة الرئيسية</a></li>
               

	        	<li class="nav-item"><a href="{{route('about')}}" class="nav-link">حول</a></li>

	          <li class="nav-item active" ><a href="{{route('contact')}}" class="nav-link">اتصل</a></li>
			  
              @guest

<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">تسجيل الدخول</a></li>

@if (Route::has('register'))

<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">تسجيل</a></li>
@endif
@else
        <li class="nav-item dropdown ">
			
            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		<img src="{{ asset(Auth::user()->image )}}" class="rounded-circle img-thumbnail avatar-lg" width="39px" height="20px" alt="User Image">
{{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout_kidds') }}"
                 >
                    {{ __('تسجيل خروج') }}
                </a>
				<a class="dropdown-item" href="{{ route('profilee') }}"
                 >
                    {{ __('الحساب') }}
                </a>

            </div>

        </li>
    @endguest

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('kiddos/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">اتصل بنا</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">الصفحة الرئيسية
 <i class="ion-ios-arrow-forward"></i></a></span> <span>اتصل <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-7 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">عنوان</h3>
	            <p>Higher Institute of Humanities , Jendouba</p>
	          </div>
          </div>
        
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">عنوان بريد الكتروني</h3>
	            <p><a href="mailto:maissa18092000@gmail.com">maissa18092000@gmail.com</a></p>
            
                <p><a href="mailto:mahaoueslati2000@gmail.com">mahaoueslati2000@gmail.com</a></p>
	          </div>
          </div>
         
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
                <center>
            @if (session('azer'))
        <div class="alert alert-success" style="font-size : 25px ;">
        {{session('azer')}}

        </div>
        @endif
        </center>
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{route('AjoutContactus')}}" method="post">
                @csrf
              <div class="form-group">
              <div>@if ($errors->has('nom'))
                                <strong style="color: red;">{{ $errors->first('nom') }}</strong>
                                @endif</div>
                <input type="text" class="form-control" name="nom" placeholder="اسمك" required>
              </div>
              <div class="form-group">
              <div>@if ($errors->has('email'))
                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                @endif</div>
                <input type="email" class="form-control"name="email" placeholder="بريدك الالكتروني" required>
              </div>
           
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" name="message" class="form-control" placeholder="رسالة" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="أرسل رسالة" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="map-container">
	<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"
          marginwidth="0" src="https://maps.google.com/maps?q=Institut+Supérieur+Des+Sciences+Humaines+De+Jendouba , 
         India, &t=&z=14&ie=UTF8&iwloc=&output=embed"></iframe>
</div>
				</div>
			</div>
		</section>

	
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="kiddos/js/jquery.min.js"></script>
  <script src="kiddos/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="kiddos/js/popper.min.js"></script>
  <script src="kiddos/js/bootstrap.min.js"></script>
  <script src="kiddos/js/jquery.easing.1.3.js"></script>
  <script src="kiddos/js/jquery.waypoints.min.js"></script>
  <script src="kiddos/js/jquery.stellar.min.js"></script>
  <script src="kiddos/js/owl.carousel.min.js"></script>
  <script src="kiddos/js/jquery.magnific-popup.min.js"></script>
  <script src="kiddos/js/aos.js"></script>
  <script src="kiddos/js/jquery.animateNumber.min.js"></script>
  <script src="kiddos/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="kiddos/js/google-map.js"></script>
  <script src="kiddos/js/main.js"></script>
    
  </body>
</html>