<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kiddos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="kiddos/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="kiddos/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
	        	<li class="nav-item active"><a href="{{route('index')}}" class="nav-link pl-0">الصفحة الرئيسية</a></li>
               

	        	<li class="nav-item"><a href="{{route('about')}}" class="nav-link">حول</a></li>

	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">اتصل</a></li>
			  
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
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(kiddos/images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">تلاميذنا مستقبلنا <span> و علمنا أملنا</span></h1>
         
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(kiddos/images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">  لا تقل لا أستطيع <span>  و تمسّك بالأمل والحلم دائمًا</span></h1>
    
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
        
         
        
        </div>
			</div>
		</section>

		@guest
	
		<center>        <h2 class="mb-4">          مرحبا بك في موقعنا ، يمكنك تسجيل الدخول<br>      للوصول الى كل الدروس و وضعيات الادماج و الامتحانات و كل ما يخص تلاميذنا</h2>  
		<p><a href="{{route('login')}}" class="btn btn-secondary px-4 py-3">تسجيل الدخول</a></p> <p><a href="{{ route('register') }}" class="btn btn-secondary px-4 py-3">تسجيل </a></p>  </center>


		@else
		@include('kustomer::kustomer')
		<center>

		@if  ( Auth::user()->classe =='السنة رابعة إبتدائي' )


		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('categdrous')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('categdrous')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('categidmajya')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('categidmajya')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('index1')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('index1')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('indexautre')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('indexautre')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
         
        </div>
      
			</div>
		</section>




	
		@elseif  ( Auth::user()->classe =='السنة الثانية إبتدائي' )
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
         
        </div>
      
			</div>
		</section>


		@elseif ( Auth::user()->classe =='السنة ثالثة إبتدائي' )
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
         
        </div>
      
			</div>
		</section>


		@elseif ( Auth::user()->classe =='السنة خامسة إبتدائي' )
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
         
        </div>
      
			</div>
		</section>


		@elseif ( Auth::user()->classe =='السنة سادسة إبتدائي' )
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
        </div>
      
			</div>
		</section>


		@elseif ( Auth::user()->classe =='السنة الأولى إبتدائي' )

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('dourous.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">دروس</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('idmaj.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وضعيات ادماجية
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('imt7anet.jpg');">
			
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">إمتحانات</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
	             
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{route('notfound')}}" class="block-20 d-flex align-items-end" style="background-image: url('wadha9.jpg');">
					
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{route('notfound')}}">وثائق أخرى
</a></h3>
             
                <div class="d-flex align-items-center mt-4">
	              
                </div>
              </div>
            </div>
          </div>
         
        </div>
      
			</div>
		</section>

		@endif
		@endguest
		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span></span> معلمونا</h2>
          
          </div>
        </div>	
				<div class="row">
					
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(kiddos/images/maissa.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>ميساء الكنزاري </h3>
							<strong><span class="position mb-2" >أستاذة تعليم إبتدائي</strong>	
</span>
								<div class="faded">
									<strong><p style="font-size 40px;">   أستاذة تعليم ابتدائي ، خريجة المعهد العالي للعلوم الإنسانية بجندوبة 21 سنة     </p></strong>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100008265515377"><span class="icon-facebook"></span></a></li>
		               
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(kiddos/images/maha.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>مها الوسلاتي</h3>
							<strong>	<span class="position mb-2">أستاذة تعليم إبتدائي</span></strong>
								<div class="faded">
								<strong><p style="font-size 40px;">  أستاذة تعليم ابتدائي ، خريجة المعهد العالي للعلوم الإنسانية بجندوبة 21 سنة</p></strong>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.facebook.com/maahaa.oueslati"><span class="icon-facebook"></span></a></li>
		              
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</section>

	

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(kiddos/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
           
           
          </div>
        </div>	
        <?php
$b = DB::table('users')->count(); 
$c = DB::table('profs')->count(); 
?>
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$b}}">{{$b}}</strong>
		             <strong>     <span> :  عدد التلاميذ المسجلين بالموقع </span> </strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$c}}">{{$c}}</strong>
		                <span> <strong>  : عدد المعلمين المسجلين بالموقع  </strong></span>
		              </div>
		            </div>
		          </div>
		          
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span> </span> ماذا يقول الأولياء عنا</h2>
          
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
			<?php



$m = \App\Models\Feedback::all();
$t = \App\Models\User::all();
?>
        
		@foreach ($m as $r)
@foreach ($t as $a)
<?php
 
$i= $a->id;

 
?>
 @if ($r->user_info == $i)
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{$a->image}})">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>  {{$r->type}} :  {{$r->message}}</p>
                    <p class="name">{{$a->name}}</p>
                 
                  </div>
                </div>
              </div>
            
			  @endif
              @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

   

  


		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="1t.jpg" class="gallery image-popup img d-flex " style="background-image: url(1t.jpg);">
					
						</a>
					</div>



					<div class="col-md-3 ftco-animate">
						<a href="2t.jpg" class="gallery image-popup img d-flex " style="background-image: url(2t.jpg);">
					
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="3t.jpg" class="gallery image-popup img d-flex " style="background-image: url(3t.jpg);">
				
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="4t.jpg" class="gallery image-popup img d-flex " style="background-image: url(4t.jpg);">
						
						</a>
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
  <script src="kiddos/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="kiddos/js/google-map.js"></script>
  <script src="kiddos/js/main.js"></script>
  <script src="{{ asset('vendor/kustomer/js/kustomer.js') }}" defer></script>
  </body>
</html>