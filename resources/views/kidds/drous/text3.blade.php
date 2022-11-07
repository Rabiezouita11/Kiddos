<!DOCTYPE html>
<head>
 
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


<script type="text/javascript" src="js/jquery.min.js"></script>
		  <script>
			$(document).ready(function(){
				$('#b').click(function(){
					$('.season').css('color','red');
				});
                $('#pppp').click(function(){
					$('.pppp').css('color','red');
				});
                $('#mmm').click(function(){
					$('.mmm').css('color','red');
				});
                $('#ppp').click(function(){
					$('.ppp').css('color','red');
				});
        $('#c').click(function(){
					$('.x').css('color','red');
				});
                $('#ooo').click(function(){
					$('.ooo').css('color','red');
				});
                $('#iii').click(function(){
					$('.iii').css('color','red');
				});
        $('#bbbb').click(function(){
					$('.bbbb').css('color','red');
				});
        $('#d').click(function(){
					$('.e').css('color','red');
				});
        $('#x').click(function(){
					$('.a').css('color','red');
				});
        $('#aa').click(function(){
					$('.aaa').css('color','red');
				});
        $('#t').click(function(){
					$('.tt').css('color','red');
				});
        $('#btn').click(function(){
					$('.red').css('color','red');
				});
        $('#xx').click(function(){
					$('.xx').css('color','red');
				});
        $('#aaa').click(function(){
					$('.aaa').css('color','red');
				});
        $('#bbb').click(function(){
					$('.bbb').css('color','red');
				});
        $('#yyy').click(function(){
					$('.yyy').css('color','red');
				});
        $('#btnn').click(function(){
					$('.green').css('color','red');
				});
        
			});
		  </script> 

<script>
    function playSound() {
          var sound = document.getElementById("audio");
        
          sound.play();
      }
      function playSound1() {
          var aa = document.getElementById("audio1");
         
          aa.play();
      }
      function playSound2() {
          var aa = document.getElementById("audio2");
         
          aa.play();
      }
      function playSound3() {
          var aa = document.getElementById("audio3");
        
          aa.play();
      }
      function playSound4() {
          var aa = document.getElementById("audio4");
         
          aa.play();
      }
      function playSound5() {
          var aa = document.getElementById("audio5");
         
          aa.play();
      }
      function playSound6() {
          var aa = document.getElementById("audio6");
         
          aa.play();
      }
      function playSound7() {
          var aa = document.getElementById("audio7");
          
          aa.play();
      }
      function playSound8() {
          var aa = document.getElementById("audio8");
        
          aa.play();
      }
      function playSound9() {
          var aa = document.getElementById("audio9");
     
          aa.play();
      }
      function playSound10() {
          var aa = document.getElementById("audio10");
     
          aa.play();
      }
      function playSound10() {
          var aa = document.getElementById("audio10");
     
          aa.play();
      }
      function playSound11() {
          var aa = document.getElementById("audio11");
     
          aa.play();
      }
    </script>

  
  <style>
input[type=radio] {
   
    width: 100%;
    height: 2em;
}


table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>



  
 

  
<img   align="left" src="ttt.png"     alt=" " class="img-fluid"  width="400px" height="400px">

 
    <br>
    <h4 style="color:blue;" align="right"> المعلّمة: ميساء الكنزاري * مها الوسلاتي </h4>
    <br>
    <h4    align="right" >    {{ Auth::user()->name }} : الإسم واللقب  <br> <br> المستوى: سنة رابعة    </h4>
 <br>	

   
 
 
  
    
    
   
  

<br>
<br>
<?php
$t = 'bb';
$x=Auth::user()->name;
$xx=Auth::user()->id;
$b = DB::table('resultatdars3s')->where('nom','=',$x)->get(); 
$ty=$b->sum('score')  ;
?>
  


<br>
<br>

 <div class="form-group">
	  	



<audio id="audio" src="nas dars3 .mp3 (pitch 0.00 - tempo 75).mp3"  ></audio>


<audio id="audio1" src="0c134d73-0f2d-4354-a6be-7ff3099ea536.mp3" ></audio>
<audio id="audio2" src="0e4907b8-e64d-4ebb-a089-6e6b54ad0ca7.mp3" ></audio>
<audio id="audio3" src="q3dars3.mp3" ></audio>
<audio id="audio4" src="q4dars3.mp3" ></audio>
<audio id="audio5" src="q5dars3.mp3" ></audio>
<audio id="audio6" src="q6dars3.mp3" ></audio>
<audio id="audio7" src="q7dars3.mp3" ></audio>
<audio id="audio8" src="q7..1dars3.mp3.mp3" ></audio>
<audio id="audio9" src="q7..2dars3.mp3" ></audio>
<audio id="audio10" src="q8dars3.mp3" ></audio>


 <center> <h1  align="right"  > : النَّصَّ   </h1> </center>  

      <center> <h1 style="color:red;"  > اُلْمَارِدُ وَسُّكَّانُ اُلْقَرْيَةِ (2) 
 </h1> </center>  
<br>
<center>
<img  src="11.jpg"   onclick="playSound();"  alt=" " class="img-fluid"  width="60px" height="60px"></center>
<center>       <h2  align="right" > 

  <center><img    src=" dars3.png"     alt=" " class="img-fluid"  width="900px" height="900px"> </center> 

 </h2>   <img    src=" dars33.png"     alt=" " class="img-fluid"  width="600px" height="600px">     </center>
<br>



<form action="{{route('s4')}}" method="post">
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{$xx}}">
 <input type="hidden" name="tt" value="{{$xx}}">
 <input type="hidden" name="nom" value="{{$x}}">
 <input type="hidden" name="resultatdars3"  value="ok">

 @if ( $b->isEmpty()) 
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 سُّكَّانُ القَرْيَةِ   </label>  </center>




<center> 
 <input type="checkbox" id="scales" name="1"
 width="100px" height="100px"   value="1" >  </center>  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلْقِرْدُ   </label>  </center>

 <center> 
 <input type="checkbox" id="scales" name="2"
 width="100px" height="100px"   value="0" >  </center>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  اُلشَّابُ   </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="3"
 width="100px" height="100px"   value="1" >  </center>   </div>   </h4>



<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  اُلْمَارِدُ     </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="4"
 width="100px" height="100px"   value="1"  >  </center>   </div>   </h4>


<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  كَرِيمَةُ      </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="5"
 width="100px" height="100px"  value="0"  >  </center>   </div>   </h4>
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  اُلْفِيلُ      </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="6"
 width="100px" height="100px" value="1"  >  </center>   </div>   </h4>
 <h4> <div class="form-group"> 
  

 <br>
 <br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">  أُكْمِلُ  </span> بِمَا يُنَاسِبُ مِنَ النَّصِّ  
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" >  (الإطَارُ المَكَانِي)  </label>  </center>

</div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8"  id="" >  (الإطَارُ الزَمَانِي)  </label>  </center>

</div>   </h4>

<br>

<h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  أُجِيبُ       <span class="e">  بِ "نَعَمْ أَوْ "لاَ  </span>
       </h3>
<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 عَادَ اُلْفِيلُ لِلْهُجُومِ عَلَى اُلْقَرْيَةِ     </label>  </center>

<select align=" right" name="9" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1">نَعَمْ  </option>
<option value="0"> لاَ  </option>


</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 قَامَ اُلْمَارِدُ بِحِمَايةِ سُكَّانِ اُلْقَرْيَةِ مِنَ اُلْفِيِل     </label>  </center>

<select align=" right" name="10"  id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0">نَعَمْ  </option>
<option value="1"> لاَ  </option>


</select>    </div>   </h4>



<h3 align=" right" > <img  src="11.jpg"  id ="iii" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="iii"> أَخْتاَرُ اُلْقَرِينَةَ اُلْمُنَاسِبَةِ   </span> لِكُلِّ جُمْلَةٍ مِنَّ اُلْجُمَلِ اُلتَالِيَةِ
       </h3>
<br>
 <h3 align="center">  <img src="q444.png" alt=" " class="img-fluid"  width="700px" height="700px"> </h3> 
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 اسْتَعاَنَ أَهْلُ اُلْقَرْيَةِ بِاُلْمَارِدِ وَلَكِّنَهُ لَمْ يُسَاعِدْهُمْ   </label>  </center>

<select align=" right" name="11" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ. ".  </option>
<option value="1">   " أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  </option>
<option value="0">   " وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . "   </option>
<option value="0">    " وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ :" إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... ".    </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 
 اشْتَرَطَ اُلشَّيْخُ عَلَى سُّكَّانِ اُلْقَرْيَةِ أَنْ يَأْتُونَهُ بِذَيْلِ اُلْفِيلِ كَيْ يُسَاعِدَهُمْ عَلَى اُلتَخَلُصِ مِنَّ اُلْمَارِدِ   </label>  </center>

<select align=" right" name="12" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ. ".  </option>
<option value="0">   " أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  </option>
<option value="0">   " وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . "   </option>
<option value="1">    " وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ :" إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... ".    </option>

</select>    </div>   </h4>
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
 
  
  اشْتَرَكَ سُّكَّانِ اُلْقَرْيَةِ فِي اُلْقَضَاءِ عَلَى اُلْفِيلِ    </label>  </center>
 
 <select align=" right" name="13" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="1"> "  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ. ".  </option>
 <option value="0">   " أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  </option>
 <option value="0">   " وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . "   </option>
 <option value="0">    " وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ :" إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... ".    </option>
 
 </select>    </div>   </h4>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 
 سَاعَدَ اُلشَّابُ اُلذَّكِيُ أَهَالِي اُلْقَرْيَةِ عَلَى اُلْإِيقَاعِ بِاُلْفِيلِ فِي اُلْحُفْرَةِ   </label>  </center>

<select align=" right" name="14" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ. ".  </option>
<option value="0">   " أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  </option>
<option value="1">   " وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . "   </option>
<option value="0">    " وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ :" إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... ".    </option>

</select>    </div>   </h4>

  

<br>
<br>



<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ الوَصْفِ الذي يُنَاسِبُ كُلَّ شَخْصِيَّةٍ 
       </h3>
<br>

<h4 align=" center"  style="color:red;"  >     اُلْمَارِدُ    </h4>   

<br>
<br>
<h4>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="15" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>مُخِيفٌ  </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="15" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">مَحْبُوبٌ  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align="center"  style="color:red;" > اُلشَّيْخُ  </h4>              
<br>
<br>
<h4>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="16" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>جَبَانٌ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="16" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">ذَكِيٌ </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>

<h4 align="center"  style="color:red;" > اُلشَّابُ   </h4>              
<br>
<br>
<h4>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="17" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>ضَخْمٌ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="17" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">بَطَلٌ </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>


<h3 align=" right" > <img  src="11.jpg"  id ="pppp" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="pppp">  
أَخْتَارُ   </span> الْاِجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>



<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلشَّابُ  </label>  </center>

<select align=" right" name="18" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> "  شَخْصِيَّةَ مُسَاعِدَةٌ ".  </option>
<option value="0">   "شَخْصِيَّةَ َ مُعَرْقِلَة  "  </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 
 اُلْمَارِدُ    </label>  </center>

<select align=" right" name="19" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  شَخْصِيَّةَ مُسَاعِدَةٌ ".  </option>
<option value="1">   "شَخْصِيَّةَ َ مُعَرْقِلَة  "  </option>
</select>    </div>   </h4>
<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 
 اُلْفِيلُ      </label>  </center>

<select align=" right" name="20" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  شَخْصِيَّةَ مُسَاعِدَةٌ ".  </option>
<option value="1">   "شَخْصِيَّةَ َ مُعَرْقِلَة  "  </option>
</select>    </div>   </h4>

  <br>

<h3 align=" right" > <img  src="11.jpg"  id ="mmm" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="mmm">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

<h4 align=" right"  id ="ppp"  onclick="playSound8();" >     لَعَلَّ اُلْمَارِدَ <u class="ppp">يَصُدُّ</u> عَنَّا اُلْفِيلَ      </h4>  
<center><img src="person.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="21" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>يَدْفَعُ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="21" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">يُخْبِرُ  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align=" right" id="bbb"   onclick="playSound9();" >  <u class="bbb">جَزَّ </u>  أَهْلُ اُلْقَرْيَةِ ذَيْلَ اُلْفِيلِ  </h4>            
<center><img src="opp.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="22" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>قَصَّ/ قَطَعَ    </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="22" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">رَبَطَ   </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>































<br>
<br>
<h3 align=" right" > السؤال التقييمي :  </h3>

<table  align=" left" style="width:20%">
  <tr>
   
  </tr>
  <tr style="height:100px">
 
  <?php


?>
    <td><center>  <br>


    <h1>  ..... /10 </h1> <br>
 
   </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table>

<br>

<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أُختار لكُلَّ شَخْصِيَّةٍ </span> الوَصْفَ الذي يُنَاسِبُها
       </h3>
<br>

<h3>
    <br>
    <br>

    <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
  سُكَّانِ اُلْقَرْيَةِ  </label>  </center>
 
 <select align=" right" name="23" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="0"> "  رَشِيقٌ ".  </option>
 <option value="2.5">   " غَيْرُ وَاثِقِينَ فِي أَنْفُسِهِمْ "  </option>
 <option value="0">   " حَكِيمٌ "  </option>
 <option value="0">   " جَبَّارٌ "  </option>
 
 </select>    </div>   </h4>
 
 <br>
  <h4> <div class="form-group"> 
   
  <center> <label for=" "> 
 
  
  اُلشَّيْخُ     </label>  </center>
 
 <select align=" right" name="24" id="cat" class="form-control" >
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="0"> "  رَشِيقٌ ".  </option>
 <option value="0">   " غَيْرُ وَاثِقِينَ فِي أَنْفُسِهِمْ "  </option>
 <option value="2.5">   " حَكِيمٌ "  </option>
 <option value="0">   " جَبَّارٌ "  </option>
 </select>    </div>   </h4>
 <h4> <div class="form-group"> 
   
  <center> <label for=" "> 
 
  
  اُلشَّابُ      </label>  </center>
 
 <select align=" right" name="25" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="2.5"> "  رَشِيقٌ ".  </option>
 <option value="0">   " غَيْرُ وَاثِقِينَ فِي أَنْفُسِهِمْ "  </option>
 <option value="0">   " حَكِيمٌ "  </option>
 <option value="0">   " جَبَّارٌ "  </option>
 </select>    </div>   </h4>
 
<br>
<h4> <div class="form-group"> 
   
   <center> <label for=" "> 
  
   
   اُلْمَارِدُ      </label>  </center>
  
  <select align=" right" name="26" id="cat" class="form-control" >
  
  
  <option value="">--الرجاء تحديد خيار--</option>
  <option value="0"> "  رَشِيقٌ ".  </option>
  <option value="0">   " غَيْرُ وَاثِقِينَ فِي أَنْفُسِهِمْ "  </option>
  <option value="0">   " حَكِيمٌ "  </option>
  <option value="2.5">   " جَبَّارٌ "  </option>
  </select>    </div>   </h4>




<center>
<button onclick="window.print()"  type="submit" class="btn btn-success pull-right">إصلاح</button>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a> </center>


</form>

@else


<?php


/* 
$A=Auth::user()->dars1;
$B=Auth::user()->dars2;
$C=Auth::user()->dars3;
$D=Auth::user()->dars4;
$E=Auth::user()->dars5;
$F=Auth::user()->dars6;
$G=Auth::user()->dars7;
$H=Auth::user()->dars8;
$I=Auth::user()->dars9;
$J=Auth::user()->dars10;
$K=Auth::user()->dars11;
$L=Auth::user()->dars12;
$M=Auth::user()->dars13;
$N=Auth::user()->dars14;
$O=Auth::user()->dars15;
$P=Auth::user()->dars16;
$Q=Auth::user()->dars17;
$R=Auth::user()->dars18;
$V=Auth::user()->dars19;
$AA=Auth::user()->dars20;
$BB=Auth::user()->dars21;
$CC=Auth::user()->dars22;
$DD=Auth::user()->dars23;
$EE=Auth::user()->dars24;
$TT=Auth::user()->dars25;
$UU=Auth::user()->dars26;
$II=Auth::user()->dars27;
$OO=Auth::user()->dars28;
 */

?>


<?php
$b = DB::table('dars3s')->where('users_id','=',$xx)->get(); 

?>


@foreach ($b as $a  )
<?php
$a1=$a->dars3_1;
$a2=$a->dars3_2;
$a3=$a->dars3_3;
$a4=$a->dars3_4;
$a5=$a->dars3_5;
$a6=$a->dars3_6;
$a7=$a->dars3_7;
$a8=$a->dars3_8;
$a9=$a->dars3_9;
$a10=$a->dars3_10;
$a11=$a->dars3_11;
$a12=$a->dars3_12;
$a13=$a->dars3_13;
$a14=$a->dars3_14;
$a15=$a->dars3_15;
$a16=$a->dars3_16;
$a17=$a->dars3_17;
$a18=$a->dars3_18;
$a19=$a->dars3_19;
$a20=$a->dars3_20;
$a21=$a->dars3_21;
$a22=$a->dars3_22;
$a23=$a->dars3_23;
$a24=$a->dars3_24;
$a25=$a->dars3_25;
$a26=$a->dars3_26;
?>


<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>
 

<center><h1 >إجابتك </h1> </center>  
    <center>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 سُّكَّانُ القَرْيَةِ  </label>  </center>



<center> 
  @if ( $a1 == '' )

  <h1 style="color:red;"> إجابة خاطئة</h1>
<img    src="uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 

@elseif ( $a1 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<img    src="check.png"   alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلْقِرْدُ   </label>  </center>

 <center> 
 @if ( $a2 == '' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
 <img    src="uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px">   </center>    </div>   </h4>
@elseif ( $a2 == 0 )
<h1 style="color:red;"> إجابة خاطئة</h1>
<img    src="check.png"     alt=" " class="img-fluid"  width="50px" height="50px">
@endif

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  اُلشَّابُ  </label>  </center>
 
 <center> 
   @if ($a3 == 1)
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
      <br>
      <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>  </div>   </h4>

@elseif ($a3 == '')
<h1 style="color:red;"> إجابة خاطئة</h1>
<img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  اُلْمَارِدُ    </label>  </center>
 
 <center> 
@if ( $a4 == '' )
   <h1 style="color:red;"> إجابة خاطئة</h1>

   <img    src="uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px">   </center>   </div>   </h4>
@else ($a4 =='1')
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<img    src="check.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  كَرِيمَةُ    </label>  </center>
 
 <center> 
   @if ( $a5 == '0' )
   <h1 style="color:red;"> إجابة خاطئة</h1>


   <img    src="check.png"     alt=" " class="img-fluid"  width="50px" height="50px"> </center>   </div>   </h4>
<h4> <div class="form-group"> 
  @elseif ($a5 == ''  )
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
  <img    src="uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
  <center> <label for=" "> 
          

  اُلْفِيلُ      </label>  </center>
 
 <center> 
   @if ($a6 == 1 )
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>   </div>   </h4>

@else ( $a6 == ''  )

<h1 style="color:red;"> إجابة خاطئة</h1>
  <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
   
<h2>إصلاح </h2>
<img    src="dars3q1.jpg"     alt=" " class="img-fluid"  width="600px" height="600px">
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">  أُكْمِلُ  </span> بِمَا يُنَاسِبُ مِنَ النَّصِّ  
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $a7 == 'القَرْيَةِ' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a7}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
@elseif ( $a7 == 'القرية'   )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="القَرْيَةِ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @else 

 <h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a7}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="القَرْيَةِ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @endif
</div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $a8 =='الصَّبَاحِ' )

 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$a8}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 @elseif ( $a8 == 'الصباح'   )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$a8}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


@else
<h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a8}}" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="الصَّبَاحِ" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


 @endif
</div>   </h4>
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  أُجِيبُ       <span class="e">  بِ "نَعَمْ أَوْ "لاَ  </span>
       </h3>
<br>


<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 عَادَ اُلْفِيلُ لِلْهُجُومِ عَلَى اُلْقَرْيَةِ     </label>  </center>


 @if  ($a9 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
  
@elseif ($a9 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
@elseif ($a9 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>

@endif
</div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 قَامَ اُلْمَارِدُ بِحِمَايةِ سُكَّانِ اُلْقَرْيَةِ مِنَ اُلْفِيِل     </label>  </center>

 @if  ($a10 == '0' )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
   
@elseif ($a10 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   
@elseif ($a10 == '' )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  

@endif
 </div>   </h4>
<br>
<center>
<h2>إصلاح </h2>
<img    src=" dars3q33.png"     alt=" " class="img-fluid"  width="600px" height="600px">

  </center>



  <h3 align=" right" > <img  src="11.jpg"  id ="iii" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="iii"> أَخْتاَرُ اُلْقَرِينَةَ اُلْمُنَاسِبَةِ   </span> لِكُلِّ جُمْلَةٍ مِنَّ اُلْجُمَلِ اُلتَالِيَةِ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 اسْتَعاَنَ أَهْلُ اُلْقَرْيَةِ بِاُلْمَارِدِ وَلَكِّنَهُ لَمْ يُسَاعِدْهُمْ </label>  </center>


 @if  ($a11 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="   أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  size="90"  class="form-group"  id="" readonly>
</center>
@elseif ($a11 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="   أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  size="90"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a11 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="   أَقْبَلَ اُلْفِيلُ مِنْ جَدِيدٍ فَجَرَى اُلسُّكَّانُ هَارِبِينَ وهُمْ يَدْعُونَ اُلْمَارِدَ اُلْجَبَّارَ لِحِمَايَتِهِمْ لَكِنَّهُ لَمْ يَتَحَرَّكْ لِيَذُودَ عَنْهُمْ."  size="90"  class="form-group"  id="" readonly>
  </center>
@endif
  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اشْتَرَطَ اُلشَّيْخُ عَلَى سُّكَّانِ اُلْقَرْيَةِ أَنْ يَأْتُونَهُ بِذَيْلِ اُلْفِيلِ كَيْ يُسَاعِدَهُمْ عَلَى اُلتَخَلُصِ مِنَّ اُلْمَارِدِ      </label>  </center>


 @if  ($a12 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ : إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... " size="95"  class="form-group"  id="" readonly>
</center>
@elseif ($a12 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ : إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... " size="95"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a12 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  وَقَفَ أَحَدُ اُلشُيُوخِ وَ قَالَ : إِنَّنِي عَلَى اُسْتِعْدَادٍ لِتَخْلِيصِكُمْ مِنْ أَذَى اُلْمَارِدِ اُلْجَبَّارِ، شَرْطَ أَنْ تَأْتُونِي بِذَيْلِ اُلْفِيلِ اُلرَّهِيبِ... " size="95"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 
 اشْتَرَكَ سُّكَّانِ اُلْقَرْيَةِ فِي اُلْقَضَاءِ عَلَى اُلْفِيلِ      </label>  </center>


 @if  ($a13 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ " size="65"  class="form-group"  id="" readonly>
</center>
@elseif ($a13 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ " size="65"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a13 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  بَقِيَ اُلسُّكَّانُ يَتَشَاوَرُونَ إِلَى أَنْ اهْتَدُوا إلَى طَرِيقَةٍ تُخَلِّصُهُمْ مِنَ اُلْفِيلِ " size="65"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>



 <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
  سَاعَدَ اُلشَّابُ اُلذَّكِيُ أَهَالِي اُلْقَرْيَةِ عَلَى اُلْإِيقَاعِ بِاُلْفِيلِ فِي اُلْحُفْرَةِ      </label>  </center>
 
 
  @if  ($a14 == '1' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="  وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . " size="110"  class="form-group"  id="" readonly>
 </center>
 @elseif ($a14 == '0' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="  وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ . " size="110"  class="form-group"  id="" readonly>
   </center>
   @elseif ($a14 == '' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="وَبَعْدَ فَتْرَةٍ عَادَ اُلْفِيلُ غَاضِبًا وَهَائِجًا وَوَثَبَ عَلَى اُلشَّابِ اُلَّذِي تَوَصَّلَ بِذَكَائِهِ وَرَشَاقَتِهِ إِلَى اُلْإِيقَاعِ بِهِ فِي اُلْحُفْرَةِ ثُمَّ رَمَاهُ بِحَرْبَةٍ فَقَتَلَهُ" size="110"  class="form-group"  id="" readonly>
   </center>
 @endif
 
  </div>   </h4>












<br>

<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ الوَصْفِ الذي يُنَاسِبُ كُلَّ شَخْصِيَّةٍ 
       </h3>
<br>


<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلْمَارِدُ      </label>  </center>


 @if  ($a15 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="مُخِيفٌ " size="5"  class="form-group"  id="" readonly>
</center>
@elseif ($a15 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="مُخِيفٌ " size="5"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a15 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="مُخِيفٌ " size="5"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>
<br>


<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلشَّيْخُ       </label>  </center>


 @if  ($a16 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
</center>
@elseif ($a16 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a16 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>

<br>
<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلشَّيْخُ       </label>  </center>


 @if  ($a16 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
</center>
@elseif ($a16 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a16 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="ذَكِيٌ " size="5"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>
<br>
<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلشَّابُ        </label>  </center>


 @if  ($a17 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="بَطَلٌ " size="5"  class="form-group"  id="" readonly>
</center>
@elseif ($a17 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="بَطَلٌ " size="5"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a17 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="بَطَلٌ " size="5"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>
<br>

 <h3 align=" right" > <img  src="11.jpg"  id ="pppp" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="pppp">  
أَخْتَارُ   </span> الْاِجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>


<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلشَّابُ         </label>  </center>


 @if  ($a18 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="شَخْصِيَّةَ مُسَاعِدَةٌ " size="12"  class="form-group"  id="" readonly>
</center>
@elseif ($a18 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="شَخْصِيَّةَ مُسَاعِدَةٌ " size="12"  class="form-group"  id="" readonly>
  </center>
  @elseif ($a18 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="شَخْصِيَّةَ مُسَاعِدَةٌ " size="12"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>


<br>
 <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
 
  اُلْمَارِدُ           </label>  </center>
 
 
  @if  ($a19 == '1' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
 </center>
 @elseif ($a19 == '0' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
   </center>
   @elseif ($a19 == '' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
   </center>
 @endif
 
  </div>   </h4>

<br>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
 
  اُلْفِيلُ             </label>  </center>
 
 
  @if  ($a20 == '1' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
 </center>
 @elseif ($a20 == '0' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
   </center>
   @elseif ($a20 == '' )
 <center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
 </center>
 <center>
 <h2>إصلاح </h2>
 <input type="text" value="شَخْصِيَّةَ مُعَرْقِلَةٌ " size="12"  class="form-group"  id="" readonly>
   </center>
 @endif
 
  </div>   </h4>


  <h3 align=" right" > <img  src="11.jpg"  id ="mmm" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="mmm">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>


@if ( $a21 == 1)


<h4 align=" right"  id ="ppp"  onclick="playSound8();" >     لَعَلَّ اُلْمَارِدَ <u class="ppp">يَصُدُّ</u> عَنَّا اُلْفِيلَ      </h4>  
<center><img src="person.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="يَدْفَعُ"  size="2"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a21 == '' )



<h4 align=" right"  id ="ppp"  onclick="playSound8();" >     لَعَلَّ اُلْمَارِدَ <u class="ppp">يَصُدُّ</u> عَنَّا اُلْفِيلَ      </h4>  
<center><img src="person.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="يَدْفَعُ"  size="2"  class="form-group"   readonly>
</h3>

@elseif( $a21 == 0 )



<h4 align=" right"  id ="ppp"  onclick="playSound8();" >     لَعَلَّ اُلْمَارِدَ <u class="ppp">يَصُدُّ</u> عَنَّا اُلْفِيلَ      </h4>  
<center><img src="person.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="يُخْبِرُ"  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="يَدْفَعُ"  size="2"  class="form-group"   readonly>
</h3>
@endif


<br>


@if ( $a22 == 1)


<h4 align=" right" id="bbb"   onclick="playSound9();" >  <u class="bbb">جَزَّ </u>  أَهْلُ اُلْقَرْيَةِ ذَيْلَ اُلْفِيلِ  </h4>            
<center><img src="opp.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="قَصَّ/ قَطَعَ "  size="15"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a22 == '' )


<h4 align=" right" id="bbb"   onclick="playSound9();" >  <u class="bbb">جَزَّ </u>  أَهْلُ اُلْقَرْيَةِ ذَيْلَ اُلْفِيلِ  </h4>            
<center><img src="opp.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="قَصَّ/ قَطَعَ "  size="15"  class="form-group"   readonly>
</h3>

@elseif( $a22 == 0 )


<h4 align=" right" id="bbb"   onclick="playSound9();" >  <u class="bbb">جَزَّ </u>  أَهْلُ اُلْقَرْيَةِ ذَيْلَ اُلْفِيلِ  </h4>            
<center><img src="opp.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="رَبَطَ"  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="قَصَّ/ قَطَعَ "  size="15"  class="form-group"   readonly>
</h3>
@endif

<br>



<h3 align=" right" > السؤال التقييمي :  </h3>

<table  align=" left" style="width:20%">
  <tr>
   
  </tr>
  <tr style="height:100px">
 
  <?php


?>
    <td><center>  <br>



    @if (   $ty == 0 )
    <h1>  {{$ty}} /10 </h1> <br>

<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 2.5 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 5 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 7.5 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 10 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@endif
   </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table>

<br>
<br>
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أُختار لكُلَّ شَخْصِيَّةٍ </span> الوَصْفَ الذي يُنَاسِبُها
       </h3>
<br>


<h3>
    <br>
    <br>


<h3  align="center" >  سُكَّانُ الْقَرْيَةِ</h3>



@if ($a23 == 2.5)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

@elseif (  $a23 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@elseif ( $a23 == ''  )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@endif
<br>

<h3  align="center" >  اُلشَّيْخُ </h3>


@if ($a24 == 2.5)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

@elseif (  $a24 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@elseif ( $a24 == ''  )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@endif
<br>
<h3  align="center" >  اُلشَّابُ </h3>


@if ($a25 == 2.5)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

@elseif (  $a25 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@elseif ( $a25 == ''  )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@endif
<br>

<h3  align="center" >  اُلْمَارِدُ </h3>


@if ($a26 == 2.5)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

@elseif (  $a26 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@elseif ( $a26 == ''  )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
</center>
@endif
<br>
<h2>إصلاح </h2>
<img src="lastdars3q8.jpg" alt=" " class="img-fluid"  width="500px" height="500px">
</center>

















@endforeach


 <br>
 <br>

<center>  <a href="{{ route('resetDars3',['id' => $x ,'tt' => $xx ])   }}" class="btn btn-danger">إعادة المحاولة</a>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a>

@endif



 

 

</form></body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>


</html>

