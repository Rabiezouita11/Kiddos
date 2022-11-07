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
    <td> <center>   {{ Auth::user()->name }} : الإسم واللقب    <br> القسم : {{ Auth::user()->classe }}  </center>  </td>
    <td style="color:red; font-size : 25px ;">  <center> <strong> امتحان الثلاثي الثاني في مادّة القراءة </strong></center> </td>
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
$b = DB::table('resulats')->where('nom','=',$x)->get(); 
$a=$b->sum('score');
?>
  @if( $b->isEmpty())

   <table  align=" right" style="width:20%">
  <tr>
   
  </tr>
  <tr style="height:150px">
 
  
    <td><center>: التوقيت  <br>

    <span class="js-timeout">2:00</span> <br>
        
 
  </center> </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table>
@else 
<table  align=" right" style="width:20%">
  <tr>
   
  </tr>
  <tr style="height:150px">
 
  
    <td><center> شكرا أنهيت امتحانك  <br>

     <br>
        
 
  </center> </td>
  </tr>
  <tr>
    
    
   
  </tr>
  <tr>

  </tr>
</table>
@endif
<table  align=" left" style="width:20%">
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
</table>

<br>
<br>
<br>
<br>
 <div class="form-group">
	  	
<br>
<br>
<br>
<br>
<br>
<br>
<audio id="audio" src="c968ae43-c65a-4ea9-ae73-e52a8955f2c3 (mp3cut.net).mp3"  ></audio>
<audio id="audio1" src="2 (mp3cut.net).mp3" ></audio>
<audio id="audio2" src="3.mp3" ></audio>
<audio id="audio3" src="4 (mp3cut.net).mp3" ></audio>
<audio id="audio4" src="5 (mp3cut.net).mp3" ></audio>
<audio id="audio5" src="6.mp3" ></audio>
<audio id="audio6" src="0c33cd79-4b43-4843-a3d1-1bd1675a2810.mp3" ></audio>
<audio id="audio7" src="73b15495-28db-4dc7-bc19-f6e66d83c3af.mp3" ></audio>
<audio id="audio8" src="a53fe3ce-727c-4699-a07a-69d50e71d6cc.mp3" ></audio>
<audio id="audio9" src="aedeed21-5c13-47ee-9283-052643488a24.mp3" ></audio>

      <center> <h1  > ’’مَنْ أَكَلَ الْحَلْوَى؟‘‘ </h1> </center>  
<br>
<center>
<img  src="11.jpg"   onclick="playSound();"  alt=" " class="img-fluid"  width="60px" height="60px"></center>
<center>       <h2   align="center" > 
<img    src=" textdevoir.png"     alt=" " class="img-fluid"  width="900px" height="900px">                </h2>        </center>
<br>
<center> <img    src=" devoirtext.png"     alt=" " class="img-fluid"  width="400px" height="400px">    </center>
   <br>


<form action="{{route('s1')}}" method="post"    >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{$xx}}">
 <input type="hidden" name="nom" value="{{$x}}">
 <input type="hidden" name="devoir"  value="ok">
 @if ( $b->isEmpty()) 
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ1) هَذهِ أَعْمَالٌ قَامَ بِهَا مَجْدِي ، <span class="season"> أَخْتَارُ الزَّمَانَ </span>  الْمُنَاسِبَ لِكُلِّ عَمَلٍ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
أَكَلَ اُلْحَلْوَى</label>  </center>




<select align=" right" name="1" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1">   قَبْلَ الْعَشَاءِ </option>
<option value="0 ">  عِنْدَ الْعَشَاءِ</option>
<option value="0"> بَعْدَ_الْعَشَاءِ </option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلْاعْتِذَارُ عِنْ تَنَاوُلِ اُلطَعَامِ </label>  </center>

<select align=" right" name="2" id="cat" class="form-control"  >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> قَبْلَ_الْعَشَاء </option>
<option value="1">  عِنْدَ_الْعَشَاءِ</option>
<option value="0"> بَعْدَ_الْعَشَاءِ </option>

</select>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

اُلْاعْتِرَافُ بِاُلْخَطَأِ </label>  </center>
 
 <select align=" right" name="3" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="0"> "قَبْلَ_الْعَشَاء </option>
 <option value="0"> "عِنْدَ_الْعَشَاءِ</option>
 <option value="1"> "بَعْدَ_الْعَشَاءِ </option>
 
 </select>    </div>   </h4>

<br>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">   أَخْتَارُ الصِّفَةَ  </span> التي تُنَاسِبُ الأُمَّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


اُلْأُمُّ </label>  </center>

<select align=" right" name="4" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> "اُلصِدْقُ </option>
<option value="1">  اُلتَّسَامُحُ</option>
<option value="0"> اُلشَّرَاهَةُ </option>

</select>    </div>   </h4>

<br>




<h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="e">  أُرَتِبُ    </span> اُلْأَحْدَاثَ اُلآتِيَةَ بِوَضْعِ اُلْأَرْقَامِ مِنْ 1 إِلَى 3 حَسَبَ وُرُودِهَا فِي اُلنَصِّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 </label>  </center>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td><select align=" right" name="5" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> 1 </option>
<option value="0">  2</option>
<option value="1"> 3 </option>

</select> </td>
 
      <td>اِعْتِرَافُ مَجْدِي بِصَنِيعِهِ وَاِعْتِذَارُهُ عَنْهُ </td>
    </tr>
    <tr>
   
      <td><select align=" right" name="6" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> 1 </option>
<option value="1">  2</option>
<option value="0"> 3 </option>

</select> </td>
      <td colspan="2">تَنَاوَلَ وَجْبَةَ اُلْعَشَاءِ  </td>
    
    </tr>
    <tr>
      <th scope="row"><select align=" right" name="7" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> 1 </option>
<option value="0">  2</option>
<option value="0"> 3 </option>

</select> </th>
      <td colspan="2">خُرُوجُ مَجْدِي لِلَّعِبِ خَارِجَ اُلْبَيْتِ </td>
    
    </tr>
  </tbody>
</table>
  </div>   </h4>
         
  
<br>

  <h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 </label>  </center>
<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <input type="radio" id="scales"  value="0" name="8"
       >
  <label for="scales"></label>
</div>
</td>
 
      <td>أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّ الْعَشَاءَ لَمْ يُعْجِبْهُ  </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="scales" value="0" name="8"
       >
  <label for="scales"></label>
</div> </td>
      <td colspan="2">أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّه يُحِبُّهَا كَثِيرًا  </td>
    
    </tr>
    <tr>
      <th scope="row"><input type="radio" id="scales" value="1" name="8"
        >
  <label for="scales"></label>
</div></th>
      <td colspan="2">أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّه اِشْتَدَّ بِهِ الجُّوعَ  </td>
    
    </tr>
  </tbody>
</table>
  </div>   </h4>


  <h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">  أَخْتَارُ القَرِينَة   </span>التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِيَة 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 جَاعَ مَجْدِي جُوعًا شَدِيدًا </label>  </center>

<select align=" right" name="9" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0">• بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي  </option>
<option value="1">  • فَتَشَجَّعْتُ وَقُلْتُ مُتَلَعْثِمًا:’’ أَنَا أَكَلْتُهَا... كُنْتُ جَائِعًا وَظَنَنْتُ أَنَّ هُنَاكَـ غَيْرَهَا... أَعْتَذِرُ. لَنْ أَرْتَكِبَ هَذِهِ الْحَمَاقَةَ ثَانِيَةً‘‘ </option>
<option value="0"> اِبْتَسَمَتْ أُمِّي وَقَالَتْ: ’’ حَلَاوَةُ صِدْقِكَـ تُغْنِينَا عَنِ الْحَلْوَى يَا مَجْدِي. ‘‘</option>

</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 سَامَحَتْ اُلْأُمُّ مَجْدِي     •  </label>  </center>

<select align=" right" name="10" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0">• بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي  </option>
<option value="0">  • فَتَشَجَّعْتُ وَقُلْتُ مُتَلَعْثِمًا:’’ أَنَا أَكَلْتُهَا... كُنْتُ جَائِعًا وَظَنَنْتُ أَنَّ هُنَاكَـ غَيْرَهَا... أَعْتَذِرُ. لَنْ أَرْتَكِبَ هَذِهِ الْحَمَاقَةَ ثَانِيَةً‘‘ </option>
<option value="1"> اِبْتَسَمَتْ أُمِّي وَقَالَتْ: ’’ حَلَاوَةُ صِدْقِكَـ تُغْنِينَا عَنِ الْحَلْوَى يَا مَجْدِي. ‘‘</option>

</select>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  خَجِلَ  مَجْدِي وَخَافَ مِنْ اِنْكِشَافِ • 

أَمْرِهِ                   </label>  </center>
 
 <select align=" right" name="11" id="cat" class="form-control" >
 
 
 <option value="">--الرجاء تحديد خيار--</option>
 <option value="1">• بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي  </option>
<option value="0">  • فَتَشَجَّعْتُ وَقُلْتُ مُتَلَعْثِمًا:’’ أَنَا أَكَلْتُهَا... كُنْتُ جَائِعًا وَظَنَنْتُ أَنَّ هُنَاكَـ غَيْرَهَا... أَعْتَذِرُ. لَنْ أَرْتَكِبَ هَذِهِ الْحَمَاقَةَ ثَانِيَةً‘‘ </option>
<option value="0"> اِبْتَسَمَتْ أُمِّي وَقَالَتْ: ’’ حَلَاوَةُ صِدْقِكَـ تُغْنِينَا عَنِ الْحَلْوَى يَا مَجْدِي. ‘‘</option>
 
 </select>    </div>   </h4>

<br>
<br>





<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ اُلْمُرَادِفَةِ اُلْمُنَاسِبِةِ لِلْكَلِمَاتِ اُلْمُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي اُلْجُمْلَةِ:
       </h3>
<br>

<h4 align=" right" >  خَرَجْتُ مِنَّ اُلْمَدْرَسَةِ <u>أَعْدُو</u>   </h4>
<center><img src="run.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
 
      <td>أَجْرِي  </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="12" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">أَمْشِي  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align=" right" > <u>تَسَلَّلْتُ</u> أَلْعَبُ خَارِجَ اُلْمَنْزِلِ  </h4>
<center><img src="snake.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
     name="13" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>خَرَجْتُ خِلْسَةً   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="13" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">خَرَجْتُ بِعِلْمِ أُمِّي   </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>

  
<br>

<div class="form-group" >  


<h4 align=" right" > <u>اِلْتَهَمْتُ </u>  قِطْعَةَ اُلْحَلْوَى </h4>
<center><img src="eat.png" alt=" " class="img-fluid"  width="150px" height="150px"></center>
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
     name="14" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>أَكَلْتُ بِبُطْءٍ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="14" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">أَكَلْتُ بِنَهَمٍ    </td>
    
    </tr>
   
  </tbody>
</table>
</div>
</h4>
  </div>   </h4>



</div>

<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)   أَخْطَأَ مَجْدِي، فَاعْتَرَفَ بِخَطَئِهِ وَاِعْتَذَرَ مِنْ أُمـّـِـهِ وَأَبِيهِ وَإِخْوَتِهِ. 
       </h3>
<br>

<h4 align=" right" id="btn"  onclick="playSound8();"   >  <span class="red"  >  هَلْ أَعْجَبَكَ تَصَرُفُ مَجْدِي؟ </span>   </h4>
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px"><input type="radio" id="contactChoice1"
     name="15" value="1" > <label for="contactChoice1">  </label> <h1>نَعَمْ</h1>
<img align=" right" src="non.png" alt=" " class="img-fluid"  width="250px" height="250px"> <input type="radio" id="contactChoice1"
     name="15" value="0" >
    <label for="contactChoice1"></label>   <h1>لَا</h1>  </center>
<br>
<h4 align=" right" id="btnn"  onclick="playSound9();" >  <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ كُنْتَ لِتَتَصَرَفَ مِثْلَهُ؟  </span>   </h4>

<br>
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px"><input type="radio" id="contactChoice1"
     name="16" value="1" >
    <label for="contactChoice1"></label>  <h1>نَعَمْ</h1>
<img align=" right" src="non.png" alt=" " class="img-fluid"  width="250px" height="250px"> <input type="radio" id="contactChoice1"
     name="16" value="0" >
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
$t=Auth::user()->question1;
$r=Auth::user()->question2;
$rr=Auth::user()->question3;
$rrr=Auth::user()->question4;
$rrrr=Auth::user()->question5;
$rrrrr=Auth::user()->question6;
$rrrrrr=Auth::user()->question7;

$rrrrrrr=Auth::user()->question8;
$rrrrrrrr=Auth::user()->question9;
$rrrrrrrrr=Auth::user()->question10;
$rrrrrrrrrr=Auth::user()->question11;
$rrrrrrrrrrr=Auth::user()->question12;
$rrrrrrrrrrrr=Auth::user()->question13;
$rrrrrrrrrrrrr=Auth::user()->question14;
$rrrrrrrrrrrrrr=Auth::user()->question15;
$rrrrrrrrrrrrrrr=Auth::user()->question16;
?>

<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ1) هَذهِ أَعْمَالٌ قَامَ بِهَا مَجْدِي ، <span class="season"> أَخْتَارُ الزَّمَانَ </span>  الْمُنَاسِبَ لِكُلِّ عَمَلٍ
       </h3>
<br>



@if  ($t == '1' )
<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 

أَكَلَ اُلْحَلْوَى</label>  </center>
  <center><h1 style="color:green;">إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="قَبْلَ الْعَشَاءِ"  class="form-group" size="6"  id="" readonly>
</center>
@elseif ($t == '0' )
<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 

أَكَلَ اُلْحَلْوَى</label>  </center>
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="قَبْلَ الْعَشَاءِ"  class="form-group" size="6"  id="" readonly>
  </center>
  
@endif
<br>

<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 اُلْاعْتِذَارُ عِنْ تَنَاوُلِ اُلطَعَامِ </label>  </center>

@if  ($r == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="عِنْدَ الْعَشَاءِ" size="6"  class="form-group"  id="" readonly>
</center>
@else ($r == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="عِنْدَ الْعَشَاءِ" size="6" class="form-group"  id="" readonly>
  </center>
@endif

<br>
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

اُلْاعْتِرَافُ بِاُلْخَطَأِ </label>  </center>

<br>

@if  ($rr == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="بَعْدَ_الْعَشَاءِ" size="6" class="form-group"  id="" readonly>
</center>

@else  ($rr == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="بَعْدَ_الْعَشَاءِ"  size="6" class="form-group"  id="" readonly>
  </center>
@endif

<br>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">   أَخْتَارُ الصِّفَةَ  </span> التي تُنَاسِبُ الأُمَّ
       </h3>
<br>

@if  ($rrr == '1' )
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


اُلْأُمُّ </label>  </center>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="اُلتَّسَامُحُ"  size="6" class="form-group"  id="" readonly>
</center>
@else  ($rrr == '0' )

<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="اُلتَّسَامُحُ"  size="6" class="form-group"  id="" readonly>
  </center>
  @endif
<br>

  <h3 align=" right" > <img  src="11.jpg"  id ="d" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="e">  أُرَتِبُ    </span> اُلْأَحْدَاثَ اُلآتِيَةَ بِوَضْعِ اُلْأَرْقَامِ مِنْ 1 إِلَى 3 حَسَبَ وُرُودِهَا فِي اُلنَصِّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 </label>  </center>
 @if  ($rrrr == '1' ) 

    <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  اِعْتِرَافُ مَجْدِي بِصَنِيعِهِ وَاِعْتِذَارُهُ عَنْهُ </label>  </center>
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="3" size="1" class="form-group"  id="" readonly>
 </center>

 @elseif  ($rrrr == '0' )    
 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  اِعْتِرَافُ مَجْدِي بِصَنِيعِهِ وَاِعْتِذَارُهُ عَنْهُ </label>  </center>
  <center>
  <center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<h2>إصلاح </h2>
  <input type="text" value="3" size="1"  class="form-group"  id="" readonly>
  </center>
  @elseif  ($rrrr == '' )    
 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  اِعْتِرَافُ مَجْدِي بِصَنِيعِهِ وَاِعْتِذَارُهُ عَنْهُ </label>  </center>
  <center>
  <center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<h2>إصلاح </h2>
  <input type="text" value="3" size="1"  class="form-group"  id="" readonly>
  </center>
  @endif

  
  @if  ($rrrrr == '1' )  
  <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَنَاوَلَ وَجْبَةَ اُلْعَشَاءِ  </label>  </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="2" size="1"  class="form-group"  id="" readonly>
 </center>
 
 @elseif  ($rrrrr == '0' )  

 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَنَاوَلَ وَجْبَةَ اُلْعَشَاءِ  </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="2" size="1" class="form-group"  id="" readonly>
  </center>
  @elseif  ($rrrrr == '' )  

 <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  تَنَاوَلَ وَجْبَةَ اُلْعَشَاءِ  </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="2" size="1" class="form-group"  id="" readonly>
  </center>
@endif
@if   ($rrrrrr == '1' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خُرُوجُ مَجْدِي لِلَّعِبِ خَارِجَ اُلْبَيْتِ  </label>  </center>
  <center>
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
 <input type="text" value="1" size="1"  class="form-group"  id="" readonly>
 </center>
@elseif ($rrrrrr == '0' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خُرُوجُ مَجْدِي لِلَّعِبِ خَارِجَ اُلْبَيْتِ  </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="1" size="1"  class="form-group"  id="" readonly>
  </center>
  @elseif ($rrrrrr == '' )  
<h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
 
  خُرُوجُ مَجْدِي لِلَّعِبِ خَارِجَ اُلْبَيْتِ  </label>  </center>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
  <input type="text" value="1" size="1"  class="form-group"  id="" readonly>
  </center>
@endif
<br>
@if   ($rrrrrrr == '1' )  

<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّه اِشْتَدَّ بِهِ الجُّوعَ"  size="30"  class="form-group"   readonly>
     </div>
     @elseif   ($rrrrrrr == '0' )  
     <h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>
     <center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّه اِشْتَدَّ بِهِ الجُّوعَ"  size="30"  class="form-group"   readonly>  </center>

@elseif   ($rrrrrrr == '' )  
     <h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>
     <center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَكَلَ مَجْدِي الْحَلْوَى لِأَنَّه اِشْتَدَّ بِهِ الجُّوعَ"  size="30"  class="form-group"   readonly>  </center>

@endif
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">  أَخْتَارُ القَرِينَة   </span>التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِيَة 
       </h3>
<br>
@if   ($rrrrrrrr == '1' )  


<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 جَاعَ مَجْدِي جُوعًا شَدِيدًا </label>  </center>

 
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="فَتَشَجَّعْتُ وَقُلْتُ مُتَلَعْثِمًا:’’ أَنَا أَكَلْتُهَا... كُنْتُ جَائِعًا وَظَنَنْتُ أَنَّ هُنَاكَـ غَيْرَهَا... أَعْتَذِرُ. لَنْ أَرْتَكِبَ هَذِهِ الْحَمَاقَةَ ثَانِيَةً"  size="90"  class="form-group"   readonly>
     </div>
     @else   ($rrrrrrrr == '0' )
     <h4 align=" right" >  <div class="form-group"> 
  
  <center> <label for=" "> 
 
  جَاعَ مَجْدِي جُوعًا شَدِيدًا </label>  </center>
 <center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="فَتَشَجَّعْتُ وَقُلْتُ مُتَلَعْثِمًا:’’ أَنَا أَكَلْتُهَا... كُنْتُ جَائِعًا وَظَنَنْتُ أَنَّ هُنَاكَـ غَيْرَهَا... أَعْتَذِرُ. لَنْ أَرْتَكِبَ هَذِهِ الْحَمَاقَةَ ثَانِيَةً"   size="90"  class="form-group"   readonly>  </center>


@endif

<br>


  @if   ($rrrrrrrrr == '1' )  
  <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
 
  سَامَحَتْ اُلْأُمُّ مَجْدِي      </label>  </center>


 
  <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value=" اِبْتَسَمَتْ أُمِّي وَقَالَتْ: ’’ حَلَاوَةُ صِدْقِكَـ تُغْنِينَا عَنِ الْحَلْوَى يَا مَجْدِي."  size="51"  class="form-group"   readonly>
     </div>
     @else   ($rrrrrrrrr == '0' )  
     <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
 
  سَامَحَتْ اُلْأُمُّ مَجْدِي      </label>  </center>


     <center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value=" اِبْتَسَمَتْ أُمِّي وَقَالَتْ: ’’ حَلَاوَةُ صِدْقِكَـ تُغْنِينَا عَنِ الْحَلْوَى يَا مَجْدِي."  size="51"  class="form-group"   readonly>
@endif
<br>
@if   ($rrrrrrrrrr == '1' )  

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  خَجِلَ  مَجْدِي وَخَافَ مِنْ اِنْكِشَافِ • 

أَمْرِهِ                   </label>  </center>


<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value=" بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي "  size="88"  class="form-group"   readonly>
     </div>

     @elseif   ($rrrrrrrrrr == '0' )  

     <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  خَجِلَ  مَجْدِي وَخَافَ مِنْ اِنْكِشَافِ • 

أَمْرِهِ                   </label>  </center>

<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value=" بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي "  size="88"  class="form-group"   readonly>

@elseif   ($rrrrrrrrrr == '' )  

<h4> <div class="form-group"> 

<center> <label for=" "> 
     

خَجِلَ  مَجْدِي وَخَافَ مِنْ اِنْكِشَافِ • 

أَمْرِهِ                   </label>  </center>

<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value=" بَعْدَ الْعَشَاءِ نَهَضَ أَخِي لِإِحْضَارِ صَحْنِ الْحَلْوَى وَعَادَ وَلَا شَيءَ مَعَهُ وَعِنْدَئِذٍ تَسَارَعَتْ دَقَّاتُ قَلْبِي وَاِحْمَرَّ وَجْهِي "  size="88"  class="form-group"   readonly>



@endif


@if  ($rrrrrrrrrrr == '1')
<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ اُلْمُرَادِفَةِ اُلْمُنَاسِبِةِ لِلْكَلِمَاتِ اُلْمُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي اُلْجُمْلَةِ:
       </h3>
<br>
<h4 align=" right" >  خَرَجْتُ مِنَّ اُلْمَدْرَسَةِ <u>أَعْدُو</u>   </h4>
<center><img src="run.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="أَجْرِي"  size="2"  class="form-group"   readonly>
     </div>

@elseif ($rrrrrrrrrrr == '0')
<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ اُلْمُرَادِفَةِ اُلْمُنَاسِبِةِ لِلْكَلِمَاتِ اُلْمُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي اُلْجُمْلَةِ:
       </h3>
<br>
<h4 align=" right" >  خَرَجْتُ مِنَّ اُلْمَدْرَسَةِ <u>أَعْدُو</u>   </h4>
<center><img src="run.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="أَمْشِي"  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَجْرِي"  size="2"  class="form-group"   readonly>
@elseif ($rrrrrrrrrrr == '')
<h3 align=" right" > <img  src="11.jpg"  id ="t" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="tt">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ اُلْمُرَادِفَةِ اُلْمُنَاسِبِةِ لِلْكَلِمَاتِ اُلْمُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي اُلْجُمْلَةِ:
       </h3>
<br>
<h4 align=" right" >  خَرَجْتُ مِنَّ اُلْمَدْرَسَةِ <u>أَعْدُو</u>   </h4>
<center><img src="run.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<center>
  <h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَجْرِي"  size="2"  class="form-group"   readonly>
@endif

<br>
@if ($rrrrrrrrrrrr == '1')

<h4 align=" right" > <u>تَسَلَّلْتُ</u> أَلْعَبُ خَارِجَ اُلْمَنْزِلِ  </h4>
<center><img src="snake.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="خَرَجْتُ خِلْسَةً"  size="8"  class="form-group"   readonly>
     </div>
     @elseif ($rrrrrrrrrrrr == '0')
     <h4 align=" right" > <u>تَسَلَّلْتُ</u> أَلْعَبُ خَارِجَ اُلْمَنْزِلِ  </h4>
<center><img src="snake.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="خَرَجْتُ بِعِلْمِ أُمِّي"  size="10"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="خَرَجْتُ خِلْسَةً"  size="8"  class="form-group"   readonly>
@elseif ($rrrrrrrrrrrr == '')
     <h4 align=" right" > <u>تَسَلَّلْتُ</u> أَلْعَبُ خَارِجَ اُلْمَنْزِلِ  </h4>
<center><img src="snake.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
<br>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=""  size="10"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="خَرَجْتُ خِلْسَةً"  size="8"  class="form-group"   readonly>
@endif

<br>


@if($rrrrrrrrrrrrr == '1')
<h4 align=" right" > <u>اِلْتَهَمْتُ </u>  قِطْعَةَ اُلْحَلْوَى </h4>
<center><img src="eat.png" alt=" " class="img-fluid"  width="150px" height="150px"></center>
<br>
<br>
<h4>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="أَكَلْتُ بِنَهَمٍ"  size="5"  class="form-group"   readonly>
     </div>
@elseif($rrrrrrrrrrrrr == '0')
<h4 align=" right" > <u>اِلْتَهَمْتُ </u>  قِطْعَةَ اُلْحَلْوَى </h4>
<center><img src="eat.png" alt=" " class="img-fluid"  width="150px" height="150px"></center>
<br>
<br>
<h4>

<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="أَكَلْتُ بِبُطْءٍ"  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَكَلْتُ بِنَهَمٍ"  size="5"  class="form-group"   readonly>
@elseif($rrrrrrrrrrrrr == '')
<h4 align=" right" > <u>اِلْتَهَمْتُ </u>  قِطْعَةَ اُلْحَلْوَى </h4>
<center><img src="eat.png" alt=" " class="img-fluid"  width="150px" height="150px"></center>
<br>
<br>
<h4>

<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value=" "  size="8"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="أَكَلْتُ بِنَهَمٍ"  size="5"  class="form-group"   readonly>

@endif
<br>
@if ($rrrrrrrrrrrrrr == '1')

<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)   أَخْطَأَ مَجْدِي، فَاعْتَرَفَ بِخَطَئِهِ وَاِعْتَذَرَ مِنْ أُمـّـِـهِ وَأَبِيهِ وَإِخْوَتِهِ. 
       </h3>
<br>
<h4 align=" right" id="btn"  onclick="playSound8();"   >  <span class="red"  >  هَلْ أَعْجَبَكَ تَصَرُفُ مَجْدِي؟ </span>   </h4>
<br>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px"> </label> <h1>نَعَمْ</h1>
@elseif ($rrrrrrrrrrrrrr == '0')
<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)   أَخْطَأَ مَجْدِي، فَاعْتَرَفَ بِخَطَئِهِ وَاِعْتَذَرَ مِنْ أُمـّـِـهِ وَأَبِيهِ وَإِخْوَتِهِ. 
       </h3>
<br>
<h4 align=" right" id="btn"  onclick="playSound8();"   >  <span class="red"  >  هَلْ أَعْجَبَكَ تَصَرُفُ مَجْدِي؟ </span>   </h4>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px"> </label> <h1>نَعَمْ</h1>
@elseif ($rrrrrrrrrrrrrr == '')
<h3 align=" right" > <img  src="11.jpg"  id ="tt" onclick="playSound7();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)   أَخْطَأَ مَجْدِي، فَاعْتَرَفَ بِخَطَئِهِ وَاِعْتَذَرَ مِنْ أُمـّـِـهِ وَأَبِيهِ وَإِخْوَتِهِ. 
       </h3>
<br>
<h4 align=" right" id="btn"  onclick="playSound8();"   >  <span class="red"  >  هَلْ أَعْجَبَكَ تَصَرُفُ مَجْدِي؟ </span>   </h4>
<br>
<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px"> </label> <h1>نَعَمْ</h1>

@endif

@if ($rrrrrrrrrrrrrrr == '1')

<h4 align=" right" id="btnn"  onclick="playSound9();" >  <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ كُنْتَ لِتَتَصَرَفَ مِثْلَهُ؟  </span>   </h4>

<br>
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px">
    <label for="contactChoice1"></label>  <h1>نَعَمْ</h1>

@elseif($rrrrrrrrrrrrrrr == '0')
<h4 align=" right" id="btnn"  onclick="playSound9();" >  <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ كُنْتَ لِتَتَصَرَفَ مِثْلَهُ؟  </span>   </h4>
<br>

<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>

<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px">
    <label for="contactChoice1"></label>  <h1>نَعَمْ</h1>
    @elseif($rrrrrrrrrrrrrrr == '')
<h4 align=" right" id="btnn"  onclick="playSound9();" >  <span class="green"> لَوْ كُنْتَ مَكَانَهُ هَلْ كُنْتَ لِتَتَصَرَفَ مِثْلَهُ؟  </span>   </h4>
<br>

<h1 style="color:red;"> إجابة خاطئة</h1>
<br>
<h2>إصلاح </h2>

<center><img align=" right" src="yes.png" alt=" " class="img-fluid"  width="250px" height="250px">
    <label for="contactChoice1"></label>  <h1>نَعَمْ</h1>
@endif

<center>  <a href="{{ route('reset',['id' => $x,'tt' => $xx ]) }}" class="btn btn-danger">إعادة المحاولة</a>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a>

@endif





 

 

</form></body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
	var interval;
	function countdown() {
	  clearInterval(interval);
	  interval = setInterval( function() {
	      var timer = $('.js-timeout').html();
	      timer = timer.split(':');
	      var minutes = timer[0];
	      var seconds = timer[1];
	      seconds -= 1;
	      if (minutes < 0) return;
	      else if (seconds < 0 && minutes != 0) {
	          minutes -= 1;
	          seconds = 59;
	      }
	      else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

	      $('.js-timeout').html(minutes + ':' + seconds);

	      if (minutes == 0 && seconds == 0) { clearInterval(interval);
        
          window.alert("إنتهى الوقت") ; }
      
	  }, 1000);
	}

	$('.js-timeout').text("60:00");
	countdown();
</script>

</html>

