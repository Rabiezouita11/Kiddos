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
        $('#vvvv').click(function(){
					$('.vvvv').css('color','red');
				});
        $('#c').click(function(){
					$('.x').css('color','red');
				});
                $('#1').click(function(){
					$('.1').css('color','brown');
				});
        $('#22').click(function(){
					$('.22').css('color','red');
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
        $('#btnn').click(function(){
					$('.green').css('color','red');
				});
        $('#hhhhh').click(function(){
					$('.hhhhh').css('color','red');
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
<div class="container">
<table style="width:100%">
  <tr>
   
  </tr>
  <tr style="height:150px">
    <td > <center> <strong style="color:Brown; font-size : 25px ;" >: المعلّمة </strong>    <br> <strong style="color:blue; font-size : 25px ;"  > ميساء الكنزاري  </strong> <br> <strong style="color:blue; font-size : 25px ;"  >   مها الوسلاتي 	   </strong>  <br> <strong style="color:dark; font-size : 25px ;" >{{ Auth::user()->name }} : الإسم واللقب</strong>  <br> <strong style="color:DarkBlue; font-size : 25px ;"  >    المستوى: سنة رابعة  	   </strong>   </center>  </td>
    <td >  <center> <strong style="color:red; font-size : 25px ;"> إدماج في القراءة</strong></center> 
<br>
 <center> (الوحدة الثالثة + الوحدة الرابعة)</center> 


</td>
    <br>
  
    <td><center> الجمهورية التونسية <br>

وزارة التربية <br>
المندوبية الجهوية للتربية           <br>
 
 بمنوبة </center> </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table>
<br>
<br>
<?php
$t = 'bb';
$x=Auth::user()->name;
$xx=Auth::user()->id;
$b = DB::table('resultat_idmajs')->where('nom','=',$x)->get(); 
$a=$b->sum('score');
?>
 


<br>
<br>
<br>
<br>
 <div class="form-group">
	  	
<br>


<audio id="audio" src="nas idmej (pitch 0.00 - tempo 75).mp3"  ></audio>
<audio id="audio1" src="qq1 ..1idmaj.mp3" ></audio>
<audio id="audio2" src="bd169e68-a762-415b-bd82-47c938c0fce6.mp3" ></audio>
<audio id="audio3" src="qq2idmaj.mp3" ></audio>
<audio id="audio4" src="qq3idmajjj.mp3" ></audio>
<audio id="audio5" src="qq4idmaj.mp3" ></audio>
<audio id="audio6" src="0c33cd79-4b43-4843-a3d1-1bd1675a2810.mp3" ></audio>
<audio id="audio7" src="qq5...1idmaj.mp3" ></audio>
<audio id="audio8" src="qq5...2idmajj.mp3" ></audio>
<audio id="audio9" src="qq6idmajjj.mp3" ></audio>
<audio id="audio10" src="qq6...1idmajj.mp3" ></audio>
<audio id="audio11" src="qq6...2idmajj.mp3" ></audio>

<h3 align=" right" >  <strong style="color:red; font-size : 25px ;"> : النَّصُ   </strong>
       </h3>
<br>
<center>
<img  src="11.jpg"   onclick="playSound();"  alt=" " class="img-fluid"  width="60px" height="60px">
<center> 

     <h2   align="center" > 
<img    src=" idmajj.png"     alt=" " class="img-fluid"  width="900px" height="900px">                </h2>        </center>

<br>
<center> <img    src=" idmajj1.png"     alt=" " class="img-fluid"  width="500px" height="500px">          </center>   

<br>

<form action="{{route('s5')}}" method="post"    >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{$xx}}">
 <input type="hidden" name="nom" value="{{$x}}">
 <input type="hidden" name="resultatidmaj"  value="ok">
 @if ( $b->isEmpty()) 
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ1)   أ-  <span class="season"> أَضَعُ عَلَامَةَ (×) </span> : أَمَامَ اُلْإِجَابَةِ اُلصَّحِيحَةِ
       </h3>
<br>
<br>
<h3   align="right" >  كَانَتْ سَفْرَةُ فَرِيقِ اُلْكَشَافَةِ   </h3>


<h3>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="scales"  value="1" name="1"
       >
  <label for="scales"></label>
</div>
</td>
 
      <td>طَوِيلَةً </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="scales" value="0" name="1"
       >
  <label for="scales"></label>
</div> </td>
      <td colspan="2">قَصِيرَةً </td>
    
    </tr>
   
  </tbody>
</table>
  </div>   </h4>
  </h3>
<br>

   <h3 align="right" id="d"  > <img  src="11.jpg"  id ="b" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px">   ب-  <span class="e"> أَخْتَرُ اُلْقَرِينَةَ اُلْمُنَاسِبَةَ </span> : لِإجَابَتك </h3>

<br>

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
     name="2" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td> خَرَجَ عَلَيْهِمْ مِنْ بَيْنِ أَشْجَارِ اُلزَّيْتُونِ رَجُلٌ طَوِيلُ اُلْقَامَةِ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="2" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2"> وقَدْ أَثْقَلَ طُولُ اُلسَّيْرِ خُطَاهُمْ    </td>
    
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="2" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2"> لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا    </td>
    
    </tr>
    
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>


<h3 align=" right" > <img  src="11.jpg"  id ="22" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  أُجِيبُ       <span class="22">  بِ "نَعَمْ أَوْ "لاَ  </span>
       </h3>
<br>



<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 تَوَقَفَ اُلْكَشَّافَةُ بَعْضَ اُلْوَقْتِ لِيأْخُذُوا قِسْطًا مِنَّ اُلرَاحَةِ</label>  </center>




<select align=" right" name="3" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1">   نَعَمْ </option>
<option value="0 ">  لَا </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 حَاوَلَ اُلرَجُلُ اُلطَوِيلُ سَرِقَةَ اُلْكَشَّافَةُ    </label>  </center>

<select align=" right" name="4" id="cat" class="form-control"  >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0">   نَعَمْ </option>
<option value="1">  لَا </option>

</select>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  تَابَعَ اُلْكَشَّافَةُ اُلْغِنَاءَ رُغْمَ التَعَب</label>  </center>
 
 <select align=" right" name="5" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="0">   نَعَمْ </option>
<option value="1">  لَا </option>
 </select>    </div>   </h4>

<br>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="x">    أَخْتَارُ اُلْأَوْصَافَ </span>  اُلَّتِي تُنَاسِبُ كُلَّ شَخْصِيَّةٍ 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 ذَكِيٌ - مُتَفَهِمٌ – مَسْؤُولٌ – فَطِنٌ   •		  </label>  </center>

<select align=" right" name="6" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "اُلرَجُلُ </option>
<option value="0">  سَامِي</option>
<option value="1"> اُلْقَائِدُ </option>

</select>    </div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 مُسَاعِدٌ- طَوِيلٌ – مُتَعَاوِنٌ	 •		 		  </label>  </center>

<select align=" right" name="7" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> "اُلرَجُلُ </option>
<option value="0">  سَامِي</option>
<option value="0"> اُلْقَائِدُ </option>

</select>    </div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 فَكِهٌ - مَرِحٌ – مُضْحِكٌ	  •		 		  </label>  </center>

<select align=" right" name="8" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "اُلرَجُلُ </option>
<option value="1">  سَامِي</option>
<option value="0"> اُلْقَائِدُ </option>

</select>    </div>   </h4>





<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">  اُجِيبُ     </span>  عَلَى الأَسْئِلَةِ اُلتَالِيَةِ مِنْ خِلَالِ  <span class="a">اِخْتِيَارِ</span> القَرِينَةِ اُلمُنَاسِبَةِ:
       </h3>
<br>

<h3 align="center">  <img src="q34idmajj.png" alt=" " class="img-fluid"  width="700px" height="700px"> </h3> 
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 كَيْفَ عَبَّرَ اُلْكَشَافُونَ عَنْ تَعَبِهِمْ؟"   </label>  </center>

<select align=" right" name="9" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "  لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا وَقَدْ ضَبَطْنَاهَا بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ." ".  </option>
<option value="1">   " وكَانَ كُلُّ وَاحِدٍ يَنْظُرُ تَارَةً إِلَى رِفَاقِهِ وَقَدْ أَجْهَدَهُمْ اُلتَّعَبُ" "  </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 
 كَيْفَ اِسْتَعَدَ فَرِيقُ اُلْكَشَافَةِ لِهَذِهِ اُلرِحْلَةِ؟   </label>  </center>

<select align=" right" name="10" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> "  لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا وَقَدْ ضَبَطْنَاهَا بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ." ".  </option>
<option value="0">   " وكَانَ كُلُّ وَاحِدٍ يَنْظُرُ تَارَةً إِلَى رِفَاقِهِ وَقَدْ أَجْهَدَهُمْ اُلتَّعَبُ" "  </option>
</select>    </div>   </h4> 
  
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="hhhhh" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="hhhhh">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

<h4 align=" right"  id ="1"  onclick="playSound7();" > <img  src="11.jpg"   onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">      <u class="1"> عَدَلَ</u> الأَطْفَالُ عَنِ اُلنَّشِيدِ</h4>  
<center><img src="stop.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
     name="11" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>وَاصَلوا    </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="11" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">تَوَقَفُوا  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align=" right" id="vvvv"   onclick="playSound8();" >  <img  src="11.jpg"   onclick="playSound8();"  alt=" " class="img-fluid"  width="60px" height="60px">  <u class="vvvv">ضَبَطَت </u>  الكَشَافَةُ اُلطَرِيقَ بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ  </h4>      .           
<center><img src="map.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
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
     name="12" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td> حَدَّدَت   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="12" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">شَتَّتَتْ   </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>


<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6) عِنْدَمَا رَأَى اُلرَجُلُ فَرِيقَ اُلْكَشَافَةِ، حَاوَلَ مُسَاعَدَتَهُمْ . 
       </h3>
<br>

<h4 align=" right" id="btn"    >  <img  src="11.jpg"   onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="red"  > هَلْ أَعْجَبَكَ تَصَرُفِ اُلرَجُلِ؟  </span>   </h4>  
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"><input type="radio" id="contactChoice1"
     name="13" value="1" > <label for="contactChoice1">  </label> <h1>نَعَمْ</h1>
<img align=" right" src="dislike.png" alt=" " class="img-fluid"  width="200px" height="200px"> <input type="radio" id="contactChoice1"
     name="13" value="0" >
    <label for="contactChoice1"></label>   <h1>لَا</h1>  </center>
<br>
<h4 align=" right" id="btnn"   >  <img  src="11.jpg"   onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ تَفْعَلُ مَا فَعَلَهُ؟  </span>   </h4>

<br>
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"><input type="radio" id="contactChoice1"
     name="14" value="1" >
    <label for="contactChoice1"></label>  <h1>نَعَمْ</h1>
<img align=" right" src="dislike.png" alt=" " class="img-fluid"  width="200px" height="200px"> <input type="radio" id="contactChoice1"
     name="14" value="0" >
    <label for="contactChoice1"></label>  <h1>لَا</h1>  </center>


<h4>

</h4>
  </div>   </h4>




<center>
<button onclick="window.print()"  type="submit" class="btn btn-success pull-right">إصلاح</button>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a> </center>


</form>

@else


<?php
$b = DB::table('idmajs')->where('users_id','=',$xx)->get(); 

?>


@foreach ($b as $a  )
<?php
$a1=$a->idmaj_1;
$a2=$a->idmaj_2;
$a3=$a->idmaj_3;
$a4=$a->idmaj_4;
$a5=$a->idmaj_5;
$a6=$a->idmaj_6;
$a7=$a->idmaj_7;
$a8=$a->idmaj_8;
$a9=$a->idmaj_9;
$a10=$a->idmaj_10;
$a11=$a->idmaj_11;
$a12=$a->idmaj_12;
$a13=$a->idmaj_13;
$a14=$a->idmaj_14;

?>
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ1)   أ-  <span class="season"> أَضَعُ عَلَامَةَ (×) </span> : أَمَامَ اُلْإِجَابَةِ اُلصَّحِيحَةِ
       </h3>
<br>
<h3   align="right" >  كَانَتْ سَفْرَةُ فَرِيقِ اُلْكَشَافَةِ   </h3>
<br>

@if (  $a1 ==  1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 
<br>
<h3><input type="text" name="7"  id=""  size="5"value="طَوِيلَةً" readonly> </h3>

@elseif ( $a1 == 0   )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmajcorr1.png"     alt=" " class="img-fluid"  width="600px" height="600px">

  </center>

@elseif ( $a1 == ''   )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmajcorr1.png"     alt=" " class="img-fluid"  width="600px" height="600px">

  </center>

@endif
<br>

<h3 align="right" id="d"  > <img  src="11.jpg"  id ="b" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px">   ب-  <span class="e"> أَخْتَرُ اُلْقَرِينَةَ اُلْمُنَاسِبَةَ </span> : لِإجَابَتك </h3>

<br>


@if (  $a2 ==  1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 
<br>
<h3><input type="text" name="7"  id=""  size="25"value="وقَدْ أَثْقَلَ طُولُ اُلسَّيْرِ خُطَاهُمْ" readonly> </h3>

@elseif ( $a2 == 0   )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmajb2.png"     alt=" " class="img-fluid"  width="600px" height="600px">

  </center>

@elseif ( $a2 == ''   )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmajb2.png"     alt=" " class="img-fluid"  width="600px" height="600px">

  </center>

@endif

<br>
<h3 align=" right" > <img  src="11.jpg"  id ="22" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  أُجِيبُ       <span class="22">  بِ "نَعَمْ أَوْ "لاَ  </span>
       </h3>
<br>
<center><h3>تَوَقَفَ اُلْكَشَّافَةُ بَعْضَ اُلْوَقْتِ لِيأْخُذُوا قِسْطًا مِنَّ اُلرَاحَةِ </h3></center>
<br>
@if ($a3 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="5"value="نَعَمْ" readonly> </h3>
@elseif  ($a3 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmaj55.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
  @elseif  ($a3 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" idmaj55.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
@endif
<br>
<center><h3>حَاوَلَ اُلرَجُلُ اُلطَوِيلُ سَرِقَةَ اُلْكَشَّافَةُ</h3></center>
<br>

@if ($a4 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 

<h3><input type="text" name="7"  id=""  size="5"value="لَا" readonly> </h3>
@elseif  ($a4 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" 258.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
  @elseif  ($a4 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" 258.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
@endif

<br>
<center><h3> تَابَعَ اُلْكَشَّافَةُ اُلْغِنَاءَ رُغْمَ التَعَبِ</h3></center>
<br>

@if ($a5 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 
<center><h3> تَابَعَ اُلْكَشَّافَةُ اُلْغِنَاءَ رُغْمَ التَعَبِ</h3></center>

<h3><input type="text" name="7"  id=""  size="5"value="لَا" readonly> </h3>
@elseif  ($a5 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" 888.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
  @elseif  ($a5 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center>
<h2>إصلاح </h2>
<img    src=" 888.png"     alt=" " class="img-fluid"  width="500px" height="500px">

  </center>
@endif

<br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="x">    أَخْتَارُ اُلْأَوْصَافَ </span>  اُلَّتِي تُنَاسِبُ كُلَّ شَخْصِيَّةٍ 
       </h3>
<br>


<center><h3> ذَكِيٌ - مُتَفَهِمٌ – مَسْؤُولٌ – فَطِنٌ •   		 </h3></center>
<br>

@if ($a6 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="5"value="اُلْقَائِدُ" readonly> </h3>
@elseif  ($a6 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="اُلْقَائِدُ" readonly> </h3>
  @elseif  ($a6 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="اُلْقَائِدُ" readonly> </h3>
@endif


<br>
<center><h3>مُسَاعِدٌ- طَوِيلٌ – مُتَعَاوِنٌ  		 </h3></center>
<br>

@if ($a7 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="5"value="اُلرَجُلُ" readonly> </h3>
@elseif  ($a7 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="اُلرَجُلُ" readonly> </h3>
  @elseif  ($a7 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="اُلرَجُلُ" readonly> </h3>
@endif

<br>
<center><h3>فَكِهٌ - مَرِحٌ – مُضْحِكٌ 		 </h3></center>
<br>

@if ($a8 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="5"value="سَامِي" readonly> </h3>
@elseif  ($a8 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="سَامِي" readonly> </h3>
  @elseif  ($a8 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="5"value="سَامِي" readonly> </h3>
@endif

<br>

<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">  اُجِيبُ     </span>  عَلَى الأَسْئِلَةِ اُلتَالِيَةِ مِنْ خِلَالِ  <span class="a">اِخْتِيَارِ</span> القَرِينَةِ اُلمُنَاسِبَةِ:
       </h3>
<br>

<center><h3>

* كَيْفَ عَبَّرَ اُلْكَشَافُونَ عَنْ تَعَبِهِمْ؟  </h3></center>
<br>

@if ($a9 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="50"value="وكَانَ كُلُّ وَاحِدٍ يَنْظُرُ تَارَةً إِلَى رِفَاقِهِ وَقَدْ أَجْهَدَهُمْ اُلتَّعَبُ" readonly> </h3>
@elseif  ($a9 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="50"value="وكَانَ كُلُّ وَاحِدٍ يَنْظُرُ تَارَةً إِلَى رِفَاقِهِ وَقَدْ أَجْهَدَهُمْ اُلتَّعَبُ" readonly> </h3>
  @elseif  ($a9 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="50"value="وكَانَ كُلُّ وَاحِدٍ يَنْظُرُ تَارَةً إِلَى رِفَاقِهِ وَقَدْ أَجْهَدَهُمْ اُلتَّعَبُ" readonly> </h3>
@endif


<br>
<center><h3>

كَيْفَ اِسْتَعَدَ فَرِيقُ اُلْكَشَافَةِ لِهَذِهِ اُلرِحْلَةِ؟   </h3></center>
<br>

@if ($a10 == 1  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 


<h3><input type="text" name="7"  id=""  size="60"value="لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا وَقَدْ ضَبَطْنَاهَا بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ" readonly> </h3>
@elseif  ($a10 == 0  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="60"value="لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا وَقَدْ ضَبَطْنَاهَا بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ" readonly> </h3>
  @elseif  ($a10 == ''  )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
<br>
<center><h2>إصلاح </h2></center>
<h3><input type="text" name="7"  id=""  size="60"value="لَنَا مَا يَلْزَمُنَا واُلطَّرِيقُ وَاضِحَةٌ لَنَا وَقَدْ ضَبَطْنَاهَا بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ" readonly> </h3>
@endif

<br>

<h3 align=" right" > <img  src="11.jpg"  id ="hhhhh" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="hhhhh">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

@if ( $a11 == 1)


<h4 align=" right"  id ="1"  onclick="playSound7();" > <img  src="11.jpg"   onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">      <u class="1"> عَدَلَ</u> الأَطْفَالُ عَنِ اُلنَّشِيدِ</h4>  
<center><img src="stop.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="تَوَقَفَ"  size="2"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a11 == '' )



<h4 align=" right"  id ="1"  onclick="playSound7();" > <img  src="11.jpg"   onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">      <u class="1"> عَدَلَ</u> الأَطْفَالُ عَنِ اُلنَّشِيدِ</h4>  
<center><img src="stop.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
<input type="text" value="تَوَقَفَ"  size="2"  class="form-group"   readonly>
</h3>

@elseif( $a11 == 0 )



<h4 align=" right"  id ="1"  onclick="playSound7();" > <img  src="11.jpg"   onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">      <u class="1"> عَدَلَ</u> الأَطْفَالُ عَنِ اُلنَّشِيدِ</h4>  
<center><img src="stop.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <h3>
<br>  <input type="text" value="وَاصَلَ"  size="2"  class="form-group"   readonly></h3>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="تَوَقَفَ"  size="2"  class="form-group"   readonly>
</h3>
@endif

<br>








@if ( $a12 == 1)


<h4 align=" right" id="vvvv"   onclick="playSound8();" >  <img  src="11.jpg"   onclick="playSound8();"  alt=" " class="img-fluid"  width="60px" height="60px">  <u class="vvvv">ضَبَطَت </u>  الكَشَافَةُ اُلطَرِيقَ بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ  </h4>      .           
<center><img src="map.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="حَدَّدَت"  size="2"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a12 == '' )



<h4 align=" right" id="vvvv"   onclick="playSound8();" >  <img  src="11.jpg"   onclick="playSound8();"  alt=" " class="img-fluid"  width="60px" height="60px">  <u class="vvvv">ضَبَطَت </u>  الكَشَافَةُ اُلطَرِيقَ بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ  </h4>      .           
<center><img src="map.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
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
<input type="text" value="حَدَّدَت"  size="2"  class="form-group"   readonly>
</h3>

@elseif( $a12 == 0 )



<h4 align=" right" id="vvvv"   onclick="playSound8();" >  <img  src="11.jpg"   onclick="playSound8();"  alt=" " class="img-fluid"  width="60px" height="60px">  <u class="vvvv">ضَبَطَت </u>  الكَشَافَةُ اُلطَرِيقَ بِاُلْخَرِيطَةِ وَاُلْبَوْصَلَةِ  </h4>      .           
<center><img src="map.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <h3>
<br>  <input type="text" value="شَتَّتَتْ"  size="2"  class="form-group"   readonly></h3>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="حَدَّدَت"  size="2"  class="form-group"   readonly>
</h3>
@endif





  @if ($a13 == '1')

  <h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6) عِنْدَمَا رَأَى اُلرَجُلُ فَرِيقَ اُلْكَشَافَةِ، حَاوَلَ مُسَاعَدَتَهُمْ . 
       </h3>
<br>
<h4 align=" right" id="btn"    >  <img  src="11.jpg"   onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="red"  > هَلْ أَعْجَبَكَ تَصَرُفِ اُلرَجُلِ؟  </span>   </h4> 
<br>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
     <center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>
@elseif ($a13 == '0')
<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6) عِنْدَمَا رَأَى اُلرَجُلُ فَرِيقَ اُلْكَشَافَةِ، حَاوَلَ مُسَاعَدَتَهُمْ . 
       </h3>
<br>
<h4 align=" right" id="btn"    >  <img  src="11.jpg"   onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="red"  > هَلْ أَعْجَبَكَ تَصَرُفِ اُلرَجُلِ؟  </span>   </h4> 
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>
@elseif ($a13 == '')
<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6) عِنْدَمَا رَأَى اُلرَجُلُ فَرِيقَ اُلْكَشَافَةِ، حَاوَلَ مُسَاعَدَتَهُمْ . 
       </h3>
<br>
<h4 align=" right" id="btn"    >  <img  src="11.jpg"   onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="red"  > هَلْ أَعْجَبَكَ تَصَرُفِ اُلرَجُلِ؟  </span>   </h4> 
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>

@endif

<br>




@if ($a14 == '1')

<h4 align=" right" id="btnn"   >  <img  src="11.jpg"   onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ تَفْعَلُ مَا فَعَلَهُ؟  </span>   </h4>

<br><br>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
   <center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>
@elseif ($a14 == '0')

<h4 align=" right" id="btnn"   >  <img  src="11.jpg"   onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ تَفْعَلُ مَا فَعَلَهُ؟  </span>   </h4>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>
@elseif ($a14 == '')

<h4 align=" right" id="btnn"   >  <img  src="11.jpg"   onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px"> <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ تَفْعَلُ مَا فَعَلَهُ؟  </span>   </h4>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="ok.png" alt=" " class="img-fluid"  width="200px" height="200px"> </label> <h1>نَعَمْ</h1>

@endif




















































<center>  <a href="{{ route('resetidmaj',['id' => $x ,'tt' => $xx ]) }}" class="btn btn-danger">إعادة المحاولة</a>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a>







 @endforeach
 @endif
 

</form></body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>


</html>

