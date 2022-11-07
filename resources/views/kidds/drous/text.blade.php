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
        $('#c').click(function(){
					$('.x').css('color','red');
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



  
 

  
<img   align="left" src="imgg.png"     alt=" " class="img-fluid"  width="400px" height="400px">

 
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
$b = DB::table('resultatdars1s')->where('nom','=',$x)->get(); 
$a=$b->sum('score')  ;
?>
  
<!-- <table  align=" left" style="width:20%">
  <tr>
   
  </tr>
  <tr style="height:150px">
 
  <?php


?>
    <td><center>  <br>
    @if( $b->isEmpty())

    <h1>  ..... /16 </h1> <br>
    @else
      @if (   $a == 0 )
     <h1>   {{$a}} /16 </h1> <br>

<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 1 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 2 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 3 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 4 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 5 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 6 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 7 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 8 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 9 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 10 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 11 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 12 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 13 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 14 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 15 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 16 )
<h1>   {{$a}} /16 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">

@endif
        @endif
 
  </center> </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table> -->

<br>
<br>

 <div class="form-group">
	  	



<audio id="audio" src="11.mp3"  ></audio>


<audio id="audio1" src="0c134d73-0f2d-4354-a6be-7ff3099ea536.mp3" ></audio>
<audio id="audio2" src="0e4907b8-e64d-4ebb-a089-6e6b54ad0ca7.mp3" ></audio>
<audio id="audio3" src="be95acbf-873b-4bc9-b7b6-29e8d964104e.mp3" ></audio>
<audio id="audio4" src="2f85d2fb-4d3f-42ae-8e9c-8d1f5709fc8f.mp3" ></audio>
<audio id="audio5" src="e7d64141-b226-476d-a36a-89aa225cdd08.mp3" ></audio>
<audio id="audio6" src="38929eb4-29b5-4ecf-b297-39e6525df89d.mp3" ></audio>
<audio id="audio7" src="0c33cd79-4b43-4843-a3d1-1bd1675a2810.mp3" ></audio>
<audio id="audio8" src="e9d9f8dd-0e67-416c-b750-ecc1a0521e6c.mp3" ></audio>
<audio id="audio9" src="4a3248b0-bfa6-4f31-a3c7-2f062eeb2cfb.mp3" ></audio>
<audio id="audio10" src="4c8a0f1d-492c-4a4f-895a-f75069ebd8e8.mp3" ></audio>
<audio id="audio11" src="f7f4139f-e7bd-45cb-bdd8-ec38b862e735.mp3" ></audio>

 <center> <h1  align="right"  > : النَّصَّ   </h1> </center>  

      <center> <h1 style="color:red;"  > جَلْسَةُ سَمَرٍ </h1> </center>  
<br>
<center>
<img  src="11.jpg"   onclick="playSound();"  alt=" " class="img-fluid"  width="60px" height="60px"></center>
<center>       <h2  align="right" > 

  <center><img    src=" w.png"     alt=" " class="img-fluid"  width="900px" height="900px"> </center> 

 </h2>   <img    src=" tt.png"     alt=" " class="img-fluid"  width="600px" height="600px">     </center>
<br>



<form action="{{route('s2')}}" method="post">
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{$xx}}">
 <input type="hidden" name="nom" value="{{$x}}">
 <input type="hidden" name="resultatdars1"  value="ok">
 @if ( $b->isEmpty()) 
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 حَمْزَةُ </label>  </center>



<center> 
 <input type="checkbox" id="scales" name="1"
 width="100px" height="100px"   value="1" >  </center>  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 الْجَدَّةُ </label>  </center>

 <center> 
 <input type="checkbox" id="scales" name="2"
 width="100px" height="100px"   value="0" >  </center>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الأَبُ  </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="3"
 width="100px" height="100px"   value="1" >  </center>   </div>   </h4>



<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الْجَدُّ   </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="4"
 width="100px" height="100px"   value="0"  >  </center>   </div>   </h4>


<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الأُمُّ    </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="5"
 width="100px" height="100px"  value="1"  >  </center>   </div>   </h4>
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  سَلْمَى    </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="6"
 width="100px" height="100px" value="1"  >  </center>   </div>   </h4>
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



<h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="e">  أُجِيبُ    </span>     بِ "نَعَمْ أَوْ "لاَ 
       </h3>
<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 عَرَضَتْ الأُمُّ عَلَى أَحْمَدَ جَائِزَةً إذَا سَكَتَ لِرُبْعِ سَاعَةً  </label>  </center>

<select align=" right" name="9" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0">نَعَمْ  </option>
<option value="1"> لاَ  </option>


</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 عَضَّ حَمْزَةُ اِصْبَعَهُ عِنْدَ تَفَطُّنِهِ بِالْفَشَلِ فِي الْبَقَاءِ سَاكِتًا      </label>  </center>

<select align=" right" name="10"  id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1">نَعَمْ  </option>
<option value="0"> لاَ  </option>


</select>    </div>   </h4>


<br>
<br>

  
<br>

  <h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">    أَخْتَارُ القَرِينَةَ   </span> التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِي 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 كَانَتْ حِكَايَةُ سَلْمَى طَرِيفَةَ  • </label>  </center>

<select align=" right" name="11" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> " وَ تَوَاصَلَتْ السَّهْرَةُ يَسُودُهَا الحُبُورُ, وَ اتَّفَقُوا عَلَى الخُرُوجِ كُلَّ نِهَايَةِ أُسْبُوعٍ ".  </option>
<option value="1">  " ضَحِكَ الجَمِيعُ "</option>
<option value="0"> " فَقَالَ لَهُ أَبُوهُ :" لَكَ جَائِزَةٌ كَبيرَةٌ إٍنْ صَبِرْتَ رُبْعَ سَاعَةٍ دُونَ أَنْ تَتَلَفَّظَ بِكَلِمَةٍ وَاحِدَةٍ .." </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 َتَمَيَّزُ حَمْزَةُ بِأَنَهُ كَثِيرُ الكَلاَمِ   </label>  </center>

<select align=" right" name="12" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> " وَ تَوَاصَلَتْ السَّهْرَةُ يَسُودُهَا الحُبُورُ, وَ اتَّفَقُوا عَلَى الخُرُوجِ كُلَّ نِهَايَةِ أُسْبُوعٍ ".  </option>
<option value="0">  " ضَحِكَ الجَمِيعُ "</option>
<option value="1"> " فَقَالَ لَهُ أَبُوهُ :" لَكَ جَائِزَةٌ كَبيرَةٌ إٍنْ صَبِرْتَ رُبْعَ سَاعَةٍ دُونَ أَنْ تَتَلَفَّظَ بِكَلِمَةٍ وَاحِدَةٍ .." </option>

</select>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          
  اِسْتَمْتَعَ أَفْرَادُ العَائِلَةِ أَثْنَاءَ الجَلْسَةِ •                    </label>  </center>
 
 <select align=" right" name="13" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="1"> " وَ تَوَاصَلَتْ السَّهْرَةُ يَسُودُهَا الحُبُورُ, وَ اتَّفَقُوا عَلَى الخُرُوجِ كُلَّ نِهَايَةِ أُسْبُوعٍ ".  </option>
<option value="0">  " ضَحِكَ الجَمِيعُ "</option>
<option value="0"> " فَقَالَ لَهُ أَبُوهُ :" لَكَ جَائِزَةٌ كَبيرَةٌ إٍنْ صَبِرْتَ رُبْعَ سَاعَةٍ دُونَ أَنْ تَتَلَفَّظَ بِكَلِمَةٍ وَاحِدَةٍ .." </option>
 
 </select>    </div>   </h4>

<br>
<br>







  <h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">   أُكْمِلُ         </span>    القَرِينَةَ بِالْكَلِمَاتِ المُنَاسِبَةِ مِنْ النَّصِّ :    
       </h3>
<br>
<h3 align=" right"> :   شَعَرَ أَفْرَادُ العَائِلَةِ بِالرَاحَةِ وَ نَامُوا نَوْمًا هَادَئًا </h3>
<br>
<br>
 <h3 align="center">    <input type="text" name="17" placeholder="44"   size="5" id="" >عَادَ  أَفْرَادُ العَائِلَةِ إِلَى  <input type="text" name="14" placeholder="1" size="5" id="" >يَشْعُرُونَ <input type="text" placeholder="22" name="15" size="5"  id="" >الْبَالِ , وَ نَامُوا <input type="text" placeholder="333" name="16" size="5" id="" > هَادِئًا مَلِيئًا  </h3> 
<br>
<br>





<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أُرَتِّب   </span>الْجُمَلَ التَالِيَةَ من 1 إلى 4 حَسَبَ مَا جَاءَ فِي النَّصِّ :
       </h3>
<br>
<h3>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td><select align=" right" name="18" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> 1 </option>
<option value="0">  2</option>
<option value="1"> 3 </option>
<option value="0"> 4 </option>
</select> </td>
 
      <td>ضَحِكَ الأَبُ وَ ضَحِكَتْ الأُمُّ </td>
    </tr>
    <tr>
   
      <td><select align=" right" name="19" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> 1 </option>
<option value="0">  2</option>
<option value="0"> 3 </option>
<option value="0"> 4 </option>
</select> </td>
      <td colspan="2">خَرَجَ أَفْرَادُ العَائِلَةِ لِيُرَفِهُوا عَنْ أَنْفُسِهُمْ    </td>
    
    </tr>
    <tr>
      <th scope="row"><select align=" right" name="20" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> 1 </option>
<option value="0">  2</option>
<option value="0"> 3 </option>
<option value="1"> 4 </option>
</select> </th>
      <td colspan="2"> نَامَ أَفْرَادُ العَائِلَةِ نَوْمًا هَادِئًا   </td>
    
    </tr>
  
  
    <tr>
      <th scope="row"><select align=" right" name="21" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> 1 </option>
<option value="1">  2</option>
<option value="0"> 3 </option>
<option value="0"> 4 </option>
</select> </th>
      <td colspan="2"> رَوَتْ سَلْمَى مِلْحَةً  </td>
    
    </tr>
  
  
  </tbody>
</table>
  </div>   </h4>
  </h3>



















<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

<h4 align=" right"  id ="aaa"  onclick="playSound8();" >    جَلَسَ أَفْرَادُ العَائِلَةِ <u class="aaa">يَتَسَامَرُونَ</u>   </h4>   
<center><img src="aa.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
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
     name="22" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>يَأْكُلُونَ  </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="22" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">يَتَحَدَّثُونَ  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align=" right" id="bbb"   onclick="playSound9();" >  قَبِلَ حَمْزَةُ الرَهَانَ و <u class="bbb" >لَمْ يَنْبَسْ بٍكَلِمَةٍ </u>   </h4>              
<center><img src="ss.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
     name="23" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>سَكَتَ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="23" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">ثَرْثَرَ    </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>

  
<br>

<div class="form-group" >  


<h4 align=" right"  id="yyy"  onclick="playSound10();"  >كَانَتْ سَهْرَةً يَسُودُهَا  <u  class="yyy">  الحُبُورُ </u>   </h4>  
<center><img src="kiidd.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>
  <div  class="form-group">  
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="contactChoice1"
     name="24" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td> الحُزْنُ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="24" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2"> الفَرَحُ / البَهْجَةُ     </td>
    
    </tr>
   
  </tbody>
</table>
</div>
</h4>
  </div>   </h4>



</div>
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

<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أَسْتَعِينُ بِالنَّصِّ وَ أُجِيبُ بِ </span> "نَعَمْ " أَوْ "لاَ "
       </h3>
<br>

<h3>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td><select align=" right" name="25" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> نَعَمْ  </option>
<option value="2.5">  لاَ </option>
</select> </td>
 
      <td>خَرَجَتْ الأَسْرَةُ لِتَقْضِي وَقْتًا فِي الغَابَة   </td>
    </tr>
    <tr>
   
      <td><select align=" right" name="26" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="2.5"> نَعَمْ  </option>
<option value="0">  لاَ </option>
</select> </td>
      <td colspan="2">تَوَاصَلَتْ السَهَرَةُ يَسُودُهَا الحُبُورَ    </td>
    
    </tr>
    <tr>
      <th scope="row"><select align=" right" name="27" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="2.5"> نَعَمْ  </option>
<option value="0">  لاَ </option>
</select> </th>
      <td colspan="2"> قُدِّمَتْ مَأْكُولاَتٍ و جَلَسَ أَفْرَادُ الأُسْرَةِ يَتَسَامَرُونَ     </td>
    
    </tr>
  
  
    <tr>
      <th scope="row"><select align=" right" name="28" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> نَعَمْ  </option>
<option value="2.5">  لاَ </option>
</select> </th>
      <td colspan="2">   أَلْقَتْ سَلْمَى بِالفَضَلاَتِ عَلَى الشَاطِئ    </td>
    
    </tr>
  
  
  </tbody>
</table>
  </div>   </h4>
  </h3>




<center>
<button onclick="window.print()"  type="submit" class="btn btn-success pull-right">إصلاح</button>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a> </center>


</form>

@else


<?php
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
?>

<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>
 

<center><h1 >إجابتك </h1> </center>  
    <center>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 حَمْزَةُ </label>  </center>



<center> 
  @if ( $A == 1 )

  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
      <br>

      <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>  </div>   </h4>


@else ( $A == '' )
<h1 style="color:red;"> إجابة خاطئة</h1>
<img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 الْجَدَّةُ </label>  </center>

 <center> 
 @if ( $B == '' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center> 
 

 <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px">   </center>    </div>   </h4>
@elseif ( $B == 0 )
<h1 style="color:red;"> إجابة خاطئة</h1>
<img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">
@endif

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الأَبُ  </label>  </center>
 
 <center> 
   @if ($C == 1)
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
      <br>

      <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>  </div>   </h4>

@elseif ($C == '')
<h1 style="color:red;"> إجابة خاطئة</h1>
<img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الْجَدُّ   </label>  </center>
 
 <center> 
@if ( $D == '0' )
   <h1 style="color:red;"> إجابة خاطئة</h1>

   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">   </center>   </div>   </h4>
@else ($D =='')
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
<img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الأُمُّ    </label>  </center>
 
 <center> 
   @if ( $E == 1 )
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  


   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px"> </center>   </div>   </h4>
<h4> <div class="form-group"> 
  @else ($E == ''  )
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
  <center> <label for=" "> 
          

  سَلْمَى    </label>  </center>
 
 <center> 
   @if ($F == 1 )
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>   </div>   </h4>

@else ( $F == ''  )

<h1 style="color:red;"> إجابة خاطئة</h1>
  <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif

<h2>إصلاح </h2>
<img    src=" corr.jpg"     alt=" " class="img-fluid"  width="600px" height="600px">
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">  أُكْمِلُ  </span> بِمَا يُنَاسِبُ مِنَ النَّصِّ  
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $G == 'الشَاطِئ' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$G}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
@elseif ( $G == 'الشاطئ'   )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="الشاطئ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @else 

 <h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$G}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="الشَاطِئ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @endif
</div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $H == 'المَسَاءِ' )

 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$H}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 @elseif ( $H == 'المساء'   )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$H}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


@else
<h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$H}}" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="المَسَاءِ" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


 @endif
</div>   </h4>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="e">  أُجِيبُ    </span>     بِ "نَعَمْ أَوْ "لاَ 
       </h3>
<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 عَرَضَتْ الأُمُّ عَلَى أَحْمَدَ جَائِزَةً إذَا سَكَتَ لِرُبْعِ سَاعَةً  </label>  </center>


 @if  ($I == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="لاَ" size="6"  class="form-group"  id="" readonly>
</center>
@else ($I == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="لاَ" size="6" class="form-group"  id="" readonly>
  </center>
@endif
</div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 عَضَّ حَمْزَةُ اِصْبَعَهُ عِنْدَ تَفَطُّنِهِ بِالْفَشَلِ فِي الْبَقَاءِ سَاكِتًا      </label>  </center>

 @if  ($J == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="نَعَمْ" size="6"  class="form-group"  id="" readonly>
</center>
@else ($J == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="نَعَمْ" size="6" class="form-group"  id="" readonly>
  </center>
@endif
 </div>   </h4>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">    أَخْتَارُ القَرِينَةَ   </span> التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِي 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 كَانَتْ حِكَايَةُ سَلْمَى طَرِيفَةَ  • </label>  </center>


 @if  ($K == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value=" ضَحِكَ الجَمِيعُ " size="11"  class="form-group"  id="" readonly>
</center>
@else ($K == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="ضَحِكَ الجَمِيعُ" size="11" class="form-group"  id="" readonly>
  </center>
@endif
  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 َتَمَيَّزُ حَمْزَةُ بِأَنَهُ كَثِيرُ الكَلاَمِ   </label>  </center>


 @if  ($L == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  فَقَالَ لَهُ أَبُوهُ لَكَ جَائِزَةٌ كَبيرَةٌ إٍنْ صَبِرْتَ رُبْعَ سَاعَةٍ دُونَ أَنْ تَتَلَفَّظَ بِكَلِمَةٍ وَاحِدَةٍ .. " size="65"  class="form-group"  id="" readonly>
</center>
@else ($L == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value=" فَقَالَ لَهُ أَبُوهُ لَكَ جَائِزَةٌ كَبيرَةٌ إٍنْ صَبِرْتَ رُبْعَ سَاعَةٍ دُونَ أَنْ تَتَلَفَّظَ بِكَلِمَةٍ وَاحِدَةٍ .. " size="65" class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          
  اِسْتَمْتَعَ أَفْرَادُ العَائِلَةِ أَثْنَاءَ الجَلْسَةِ •                    </label>  </center>
 
  @if  ($M == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  وَ تَوَاصَلَتْ السَّهْرَةُ يَسُودُهَا الحُبُورُ, وَ اتَّفَقُوا عَلَى الخُرُوجِ كُلَّ نِهَايَةِ أُسْبُوعٍ " size="59"  class="form-group"  id="" readonly>
</center>
@else ($M == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value=" وَ تَوَاصَلَتْ السَّهْرَةُ يَسُودُهَا الحُبُورُ, وَ اتَّفَقُوا عَلَى الخُرُوجِ كُلَّ نِهَايَةِ أُسْبُوعٍ " size="59" class="form-group"  id="" readonly>
  </center>
@endif
   </div>   </h4>

<br>

<h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">   أُكْمِلُ         </span>    القَرِينَةَ بِالْكَلِمَاتِ المُنَاسِبَةِ مِنْ النَّصِّ :    
       </h3>
<br>
<h3 align=" right"> :   شَعَرَ أَفْرَادُ العَائِلَةِ بِالرَاحَةِ وَ نَامُوا نَوْمًا هَادَئًا </h3>
<br>
<br>
 <h3 align="center">    
 
 
 @if ( $N == 'المنزل'  )

 <center>  <h3>عَادَ  أَفْرَادُ العَائِلَةِ إِلَى </h3> </center>
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
 <input type="text" name="14" placeholder="1" size="5" id="" value="{{$N}}" readonly>
 @elseif (  $N == 'الْمَنْزِلِ'   )
 <center>  <h3>عَادَ  أَفْرَادُ العَائِلَةِ إِلَى </h3> </center>
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
 <input type="text" name="14" placeholder="1" size="5" id="" value="{{$N}}" readonly>

 @else
 <center>  <h3>عَادَ  أَفْرَادُ العَائِلَةِ إِلَى </h3> </center>
 <center>
<h1 style="color:red;"> إجابة خاطئة</h1>
<input type="text" name="14" placeholder="1" size="5" id="" value="الْمَنْزِلِ" readonly>
</center>

 @endif



 @if ( $O == 'براحة'  )

<center>  <h3>يَشْعُرُونَ </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$O}}" readonly>
@elseif ( $O == 'بِرَاحَةِ'  )
<center>  <h3>يَشْعُرُونَ </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$O}}" readonly>
@else
<center>  <h3>يَشْعُرُونَ </h3> </center>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
<input type="text" name="14" placeholder="1" size="5" id="" value="براحة" readonly>
</center>
<br>

@endif

@if ( $P == 'نوما'  )

<center>  <h3> وَ نَامُوا </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$P}}" readonly>
@elseif ( $P == 'نَوْمًا'  )
<center>  <h3> وَ نَامُوا </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$P}}" readonly>
@else
<center>  <h3> وَ نَامُوا </h3> </center>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
<input type="text" name="14" placeholder="1" size="5" id="" value="نوما" readonly>
</center>
<br>

@endif

@if ( $Q == 'بِالأَحْلاَمِ'  )

<center>  <h3> هَادِئًا مَلِيئًا </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$Q}}" readonly>
@elseif ( $Q == 'بالأحلام'  )
<center>  <h3> هَادِئًا مَلِيئًا </h3> </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <center>
<input type="text" name="14" placeholder="1" size="5" id="" value="{{$Q}}" readonly>
@else
<center>  <h3>هَادِئًا مَلِيئًا </h3> </center>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
<input type="text" name="14" placeholder="1" size="5" id="" value="بِالأَحْلاَمِ" readonly>
</center>
<br>


 <center><h2>إصلاح </h2></center> 
 <img    src=" aaaa.png"     alt=" " class="img-fluid"  width="800px" height="800px">
@endif
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أُرَتِّب   </span>الْجُمَلَ التَالِيَةَ من 1 إلى 4 حَسَبَ مَا جَاءَ فِي النَّصِّ :
       </h3>
<br>

@if  ($R == '1' ) 

    <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  ضَحِكَ الأَبُ وَ ضَحِكَتْ الأُمُّ </label>  </center>
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="3" size="1" class="form-group"  id="" readonly>
 </center>

 @elseif  ($R == '0' )    
 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  ضَحِكَ الأَبُ وَ ضَحِكَتْ الأُمُّ </label>  </center>
  <center>
  <center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<h2>إصلاح </h2>
  <input type="text" value="3" size="1"  class="form-group"  id="" readonly>
  @elseif  ($R == '' )    
 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  ضَحِكَ الأَبُ وَ ضَحِكَتْ الأُمُّ </label>  </center>
  <center>
  <center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<h2>إصلاح </h2>
  <input type="text" value="3" size="1"  class="form-group"  id="" readonly>
  </center>
  @endif
  @if  ($V == '1' )  
  <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خَرَجَ أَفْرَادُ العَائِلَةِ لِيُرَفِهُوا عَنْ أَنْفُسِهُمْ   </label>  </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="1" size="1"  class="form-group"  id="" readonly>
 </center>
 
 @elseif  ($V == '0' )  

 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خَرَجَ أَفْرَادُ العَائِلَةِ لِيُرَفِهُوا عَنْ أَنْفُسِهُمْ </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="1" size="1" class="form-group"  id="" readonly>
  </center>
  @elseif  ($V == '' )  

<h4 align=" right" >  <div class="form-group"> 
 
 <center> <label for=" "> 


 خَرَجَ أَفْرَادُ العَائِلَةِ لِيُرَفِهُوا عَنْ أَنْفُسِهُمْ </label>  </center>
<center>
 <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
 <input type="text" value="1" size="1" class="form-group"  id="" readonly>
 </center>
@endif
@if   ($AA == '1' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  نَامَ أَفْرَادُ العَائِلَةِ نَوْمًا هَادِئًا    </label>  </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="4" size="1"  class="form-group"  id="" readonly>
 </center>
@elseif ($AA == '0' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  نَامَ أَفْرَادُ العَائِلَةِ نَوْمًا هَادِئًا    </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="4" size="1"  class="form-group"  id="" readonly>
  </center>
  @elseif ($AA == '' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  نَامَ أَفْرَادُ العَائِلَةِ نَوْمًا هَادِئًا    </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="4" size="1"  class="form-group"  id="" readonly>
  </center>
@endif

@if   ($BB== '1' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  رَوَتْ سَلْمَى مِلْحَةً     </label>  </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="2" size="1"  class="form-group"  id="" readonly>
 </center>
@elseif ($BB == '0' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  رَوَتْ سَلْمَى مِلْحَةً     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="2" size="1"  class="form-group"  id="" readonly>
  </center>
  @elseif ($BB == '' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  رَوَتْ سَلْمَى مِلْحَةً     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="2" size="1"  class="form-group"  id="" readonly>
  </center>
@endif
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>



@if($CC == '1')
<h4 align=" right"  id ="aaa"  onclick="playSound8();" >    جَلَسَ أَفْرَادُ العَائِلَةِ <u class="aaa">يَتَسَامَرُونَ</u>   </h4>   
<center><img src="aa.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value=" يَتَحَدَّثُونَ"  size="5"  class="form-group"   readonly>
     </div>
@elseif($CC == '0')
<h4 align=" right"  id ="aaa"  onclick="playSound8();" >    جَلَسَ أَفْرَادُ العَائِلَةِ <u class="aaa">يَتَسَامَرُونَ</u>   </h4>   
<center><img src="aa.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>

<center> <h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="يَأْكُلُونَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="يَتَحَدَّثُونَ"  size="5"  class="form-group"   readonly>
@elseif($CC == '')
<h4 align=" right"  id ="aaa"  onclick="playSound8();" >    جَلَسَ أَفْرَادُ العَائِلَةِ <u class="aaa">يَتَسَامَرُونَ</u>   </h4>   
<center><img src="aa.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>
<center> 
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="يَتَحَدَّثُونَ"  size="5"  class="form-group"   readonly>

@endif

<br>

@if($DD == '1')
<h4 align=" right" id="bbb"   onclick="playSound9();" >  قَبِلَ حَمْزَةُ الرَهَانَ و <u class="bbb" >لَمْ يَنْبَسْ بٍكَلِمَةٍ </u>   </h4>              
<center><img src="ss.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h4>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value=" سَكَتَ"  size="5"  class="form-group"   readonly>
     </div>
@elseif($DD == '0')
<h4 align=" right" id="bbb"   onclick="playSound9();" >  قَبِلَ حَمْزَةُ الرَهَانَ و <u class="bbb" >لَمْ يَنْبَسْ بٍكَلِمَةٍ </u>   </h4>              
<center><img src="ss.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h4>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="ثَرْثَرَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="سَكَتَ"  size="5"  class="form-group"   readonly>
@elseif($DD == '')
<h4 align=" right" id="bbb"   onclick="playSound9();" >  قَبِلَ حَمْزَةُ الرَهَانَ و <u class="bbb" >لَمْ يَنْبَسْ بٍكَلِمَةٍ </u>   </h4>              
<center><img src="ss.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h4>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="سَكَتَ"  size="5"  class="form-group"   readonly>

@endif
<br>






@if($EE == '1')
<h4 align=" right"  id="yyy"  onclick="playSound10();"  >كَانَتْ سَهْرَةً يَسُودُهَا  <u  class="yyy">  الحُبُورُ </u>   </h4>  
<center><img src="kiidd.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value=" الفَرَحُ / البَهْجَةُ"  size="15"  class="form-group"   readonly>
     </div>
@elseif($EE == '0')
<h4 align=" right"  id="yyy"  onclick="playSound10();"  >كَانَتْ سَهْرَةً يَسُودُهَا  <u  class="yyy">  الحُبُورُ </u>   </h4>  
<center><img src="kiidd.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>

<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="الحُزْنُ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="الفَرَحُ / البَهْجَةُ"  size="15"  class="form-group"   readonly>
@elseif($EE == '')
<h4 align=" right"  id="yyy"  onclick="playSound10();"  >كَانَتْ سَهْرَةً يَسُودُهَا  <u  class="yyy">  الحُبُورُ </u>   </h4>  
<center><img src="kiidd.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>

<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="الحُزْنُ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="الفَرَحُ / البَهْجَةُ"  size="15"  class="form-group"   readonly>

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

    @if (   $a == 0 )
    <h1>  {{$a}} /10 </h1> <br>

<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 2.5 )
<h1>   {{$a}} /10 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 5 )
<h1>   {{$a}} /10 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 7.5 )
<h1>   {{$a}} /10 </h1> <br>
<img align=" right" src="1116.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $a == 10 )
<h1>   {{$a}} /10 </h1> <br>
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

<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound11();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أَسْتَعِينُ بِالنَّصِّ وَ أُجِيبُ بِ </span> "نَعَمْ " أَوْ "لاَ "
       </h3>
<br>

<br>
<br>


@if   ($TT== '2.5' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خَرَجَتْ الأَسْرَةُ لِتَقْضِي وَقْتًا فِي الغَابَة    </label> </h4> </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
 </center>
@elseif ($TT == '0' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خَرَجَتْ الأَسْرَةُ لِتَقْضِي وَقْتًا فِي الغَابَة     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="نَعَمْ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
  </center>
  @elseif ($TT == '' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خَرَجَتْ الأَسْرَةُ لِتَقْضِي وَقْتًا فِي الغَابَة     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="نَعَمْ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
  </center>
@endif


<br>



@if   ($UU== '2.5' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَوَاصَلَتْ السَهَرَةُ يَسُودُهَا الحُبُورَ     </label> </h4> </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
 </center>
@elseif ($UU == '0' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَوَاصَلَتْ السَهَرَةُ يَسُودُهَا الحُبُورَ      </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="لاَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
  </center>
  @elseif ($UU == '' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَوَاصَلَتْ السَهَرَةُ يَسُودُهَا الحُبُورَ      </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="لاَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
  </center>
@endif

<br>

@if   ($II== '2.5' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  قُدِّمَتْ مَأْكُولاَتٍ و جَلَسَ أَفْرَادُ الأُسْرَةِ يَتَسَامَرُونَ     </label> </h4> </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
 </center>
@elseif ($II == '0' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  قُدِّمَتْ مَأْكُولاَتٍ و جَلَسَ أَفْرَادُ الأُسْرَةِ يَتَسَامَرُونَ     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="لاَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
  </center>
  @elseif ($II == '' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  قُدِّمَتْ مَأْكُولاَتٍ و جَلَسَ أَفْرَادُ الأُسْرَةِ يَتَسَامَرُونَ     </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="لاَ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="نَعَمْ" size="8"  class="form-group"  id="" readonly>
  </center>
@endif
<br>


@if   ($OO== '2.5' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  أَلْقَتْ سَلْمَى بِالفَضَلاَتِ عَلَى الشَاطِئ    </label> </h4> </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
 </center>
@elseif ($OO == '0' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  أَلْقَتْ سَلْمَى بِالفَضَلاَتِ عَلَى الشَاطِئ    </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="نَعَمْ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
  </center>
  @elseif ($OO == '' )  
<h4 align=" center" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  أَلْقَتْ سَلْمَى بِالفَضَلاَتِ عَلَى الشَاطِئ    </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="نَعَمْ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="لاَ" size="8"  class="form-group"  id="" readonly>
  </center>
@endif














 <br>
 <br>

<center>  <a href="{{ route('resetD',['id' => $x , 'tt' => $xx]) }}" class="btn btn-danger">إعادة المحاولة</a>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a>

@endif



 

 

</form></body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>


</html>

