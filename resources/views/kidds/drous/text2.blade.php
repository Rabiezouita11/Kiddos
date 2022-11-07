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
$b = DB::table('resultatdars2s')->where('nom','=',$x)->get(); 
$ty=$b->sum('score')  ;
?>
  


<br>
<br>

 <div class="form-group">
	  	



<audio id="audio" src="nas dars 2 (mp3cut.net).mp3"  ></audio>


<audio id="audio1" src="0c134d73-0f2d-4354-a6be-7ff3099ea536.mp3" ></audio>
<audio id="audio2" src="0e4907b8-e64d-4ebb-a089-6e6b54ad0ca7.mp3" ></audio>
<audio id="audio3" src="q3.mp3" ></audio>
<audio id="audio4" src="2f85d2fb-4d3f-42ae-8e9c-8d1f5709fc8f.mp3" ></audio>
<audio id="audio5" src="q5.mp3" ></audio>
<audio id="audio6" src="q6.mp3" ></audio>
<audio id="audio7" src="q6.1.mp3" ></audio>
<audio id="audio8" src="q6.2.mp3" ></audio>
<audio id="audio9" src="q7.mp3" ></audio>
<audio id="audio10" src="1408a5a5-a3d2-4491-be89-d1bc642198e1.mp3" ></audio>


 <center> <h1  align="right"  > : النَّصَّ   </h1> </center>  

      <center> <h1 style="color:red;"  >  المَارَدُ وَ سُكَّانُ القَرْية (1)
 </h1> </center>  
<br>
<center>
<img  src="11.jpg"   onclick="playSound();"  alt=" " class="img-fluid"  width="60px" height="60px"></center>
<center>       <h2  align="right" > 

  <center><img    src=" dars2.png"     alt=" " class="img-fluid"  width="900px" height="900px"> </center> 

 </h2>   <img    src=" dars22.png"     alt=" " class="img-fluid"  width="600px" height="600px">     </center>
<br>



<form action="{{route('s3')}}" method="post">
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{$xx}}">
 <input type="hidden" name="tt" value="{{$xx}}">
 <input type="hidden" name="nom" value="{{$x}}">
 <input type="hidden" name="resultatdars2"  value="ok">
 @if ( $b->isEmpty()) 
<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 قِطٌّ  </label>  </center>




<center> 
 <input type="checkbox" id="scales" name="1"
 width="100px" height="100px"   value="0" >  </center>  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 نَمِرٌ  </label>  </center>

 <center> 
 <input type="checkbox" id="scales" name="2"
 width="100px" height="100px"   value="0" >  </center>    </div>   </h4>

<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  سُّكَّانُ القَرْيَةِ  </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="3"
 width="100px" height="100px"   value="1" >  </center>   </div>   </h4>



<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  أَحْمَدُ    </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="4"
 width="100px" height="100px"   value="0"  >  </center>   </div>   </h4>


<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  سَلْمَى     </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="5"
 width="100px" height="100px"  value="0"  >  </center>   </div>   </h4>
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الْمَارِدُ     </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="6"
 width="100px" height="100px" value="1"  >  </center>   </div>   </h4>
 <h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  الْفِيلُ      </label>  </center>
 
 <center> 
 <input type="checkbox" id="scales" name="7"
 width="100px" height="100px" value="1"  >  </center>   </div>   </h4>
 <br>
 <br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">  أُكْمِلُ  </span> بِمَا يُنَاسِبُ مِنَ النَّصِّ  
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8"  id="" >  (الإطَارُ المَكَانِي)  </label>  </center>

</div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 


 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="9"  id="" >  (الإطَارُ الزَمَانِي)  </label>  </center>

</div>   </h4>



<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>
<h3  align=" right" >    : فِي النَّصِّ اِبْتِلاَءَانِ أُصِيبَ بِهِمَا أَهْلُ الْقَرْيَةَ   </h3>
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
    
      <td> <input type="checkbox" id="scales"  value="1" name="10"
       >
  <label for="scales"></label>
</div>
</td>
 
      <td>هُجُومُ الْفِيلَ وَ اِلْتِهَامِهِ لِمَزْرُوعَاتِ سُّكُّانِ الْقَرْيَةِ    </td>
    </tr>
    <tr>
   
      <td><input type="checkbox" id="scales" value="0" name="11"
       >
  <label for="scales"></label>
</div> </td>
      <td colspan="2">تَلَفُ الْمَزْرُوعَاتِ بِسَبَبِ الجَفَافِ   </td>
    
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" id="scales" value="1" name="12"
        >
  <label for="scales"></label>
</div></th>
      <td colspan="2">هُجُومُ المَارِدَ الْعِمْلاَقَ عَلَى الْقَرْيَةِ وَ تَدْمِيرِهِ لِكُلِ مَا يَعْتَرِضُ طَرِيقَهُ   </td>
    
    </tr>
  </tbody>
</table>
  </div>   </h4>

<br>
<br>

  
<br>

  <h3 align=" right" > <img  src="11.jpg"  id ="iii" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="iii">    أَخْتَارُ القَرِينَةَ   </span> التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِي 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 لَمْ يُقَاوِمْ أَهْلُ الْقَرْيَةِ هُجُومَ الْفِيلِ • </label>  </center>

<select align=" right" name="13" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="0"> " لَكِنَّ الْمَارِدَ صَاحَ بِصَوْتٍ غَلِيظٍ :" إِنْ أَرَدْتُمْ أَنْ أُخَلِّصَكُمْ مِنَ الْفِيلِ , عَلَيْكُمْ أَنْ تُنَفِّذُوا كُلَّ أَوَامِرِي ..." .  •   </option>
<option value="1">  " " فَاِنْدَفَعَ سُكَانُ الْقَرْيَةِ صَارِخِينَ فِي كُلِّ اِتِّجَاهٍ يَبْغُونَ الْهَرَبَ وَ طَلَبَ النَّجْدَةِ دُونَ جَدْوَى فَقَدْ اِلْتَهَمَ الْفِيلُ الْمَزْرُوعَاتِ وَ عَبَثَ بِهَا ثُمَّ اِنْصَرَفَ ."  "</option>
</select>    </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 

 اِشْتَرَطَ الْمَارِدُ عَلَى أَهْلَ الْقَرْيَةِ • 

أَنْ يُنَفِّذُوا كُلَّ أَوَامِرَهُ </label>  </center>

<select align=" right" name="14" id="cat" class="form-control" >


<option value="">--الرجاء تحديد خيار--</option>
<option value="1"> "لَكِنَّ الْمَارِدَ صَاحَ بِصَوْتٍ غَلِيظٍ :" إِنْ أَرَدْتُمْ أَنْ أُخَلِّصَكُمْ مِنَ الْفِيلِ , عَلَيْكُمْ أَنْ تُنَفِّذُوا كُلَّ أَوَامِرِي ..." .  •   </option>
<option value="0">  " " فَاِنْدَفَعَ سُكَانُ الْقَرْيَةِ صَارِخِينَ فِي كُلِّ اِتِّجَاهٍ يَبْغُونَ الْهَرَبَ وَ طَلَبَ النَّجْدَةِ دُونَ جَدْوَى فَقَدْ اِلْتَهَمَ الْفِيلُ الْمَزْرُوعَاتِ وَ عَبَثَ بِهَا ثُمَّ اِنْصَرَفَ ."  "</option>
</select>    </div>   </h4>


<br>
<br>







  <h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">   أَعْطِ وَصْفًا         </span>    يُنَاسِبُ كُلَ شَخْصِيَّةٍ :   
       </h3>
<br>

 
<center><img src="mard.png" alt=" " class="img-fluid"  width="350px" height="350px"></center>
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
    
    <h4 align="center"   >  <input type="text" name="15"  id=""> : الْمَارِدُ  </h4>  
   
     
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

            
<center><img src="runnn.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
    <h4 align="center"   >  <input type="text" name="16"  id=""> :  سُّكَّانُ القَرْيَةِ   </h4>  
    </tr>
    
   
  </tbody>
</table>
</h4>
  </div>   </h4>

  
<br>

<div class="form-group" >  



<center><img src="elefent.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
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
    
    <h4 align="center"   >  <input type="text" name="17"  id=""> :  الْفِيل  </h4>  
    </tr>
   
   
  </tbody>
</table>
</div>
</h4>
  </div>   </h4>



</div>


















<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

<h4 align=" right"  id ="ppp"  onclick="playSound7();" >     <u class="ppp">فَلَّحَ</u>  أَهْلُ الْقَرْيَةِ الأَرْض    </h4>   
<center><img src="farm.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
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
     name="18" value="1" >
    <label for="contactChoice1"></label></td>
 
      <td>حَرَثَ  </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="18" value="0" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">سَقَى  </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

<h4 align=" right" id="bbb"   onclick="playSound8();" >  <u class="bbb">حَطَّمَ </u>  الْمَارِدُ كُلَ مَا اِعْتَرَضَ طَرِيقَهُ    </h4>              
<center><img src="strong.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
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
     name="19" value="0" >
    <label for="contactChoice1"></label></td>
 
      <td>أَصْلَحَ   </td>
    </tr>
    <tr>
   
      <td><input type="radio" id="contactChoice1"
     name="19" value="1" >
    <label for="contactChoice1"></label></td>
      <td colspan="2">هَدَّمَ / أَفْسَدَ     </td>
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="ooo" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="ooo">  
أَضَعُ عَلَامَةَ (×)   </span> أَمَامَ مَا يُنَاسِبُ :
       </h3>
<br>
<h3 align=" right" > : الْفِيلُ هُو شَخْصِيَّةٌ  </h3>
 <br>
 <h4>
 <table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <center><input type="radio" id="scales"  value="0" name="20"> </center>
       
  <label for="scales"></label>
</div>
</td>
 
      <td>مُسَاعِدَةٌ    </td>
    </tr>
    <tr>
   
      <td> <center><input type="radio" id="scales" value="1" name="20"
       ></center>
  <label for="scales"></label>
</div> </td>
      <td colspan="2">مُعَرْقِلَةٌ  </td>
    
    </tr>
  </tbody>
</table>
  </div>   </h4>
  <br>
  <h3 align=" right" > :الْمَارِدُ هُو شَخْصِيَّةٌ  </h3>
 <br>
 <h4>
 <table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <center><input type="radio" id="scales"  value="1" name="22"> </center>
       
  <label for="scales"></label>
</div>
</td>
 
      <td>مُسَاعِدَةٌ    </td>
    </tr>
    <tr>
   
      <td> <center><input type="radio" id="scales" value="0" name="22"
       ></center>
  <label for="scales"></label>
</div> </td>
      <td colspan="2">مُعَرْقِلَةٌ  </td>
    
    </tr>
  </tbody>
</table>
  </div>   </h4>

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

<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أَضَعُ عَلَامَةَ (×) </span> أَمَامَ الأَوْصَافَ التي تُنَاسِبُ كُلَ شَخْصِيَّةٍ
       </h3>
<br>

<h3>
    <br>
    <br>

<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <center> 
 <input type="checkbox" id="scales" name="24"
 width="100px" height="100px"  value="2"  >  </center>  </td>
 
      <td>جُبَنَاءٌ  </td>
    </tr>
    <tr>
   
      <td><center> 
 <input type="checkbox" id="scales" name="25"
 width="100px" height="100px"  value="0"  >  </center> </td>
      <td colspan="2">شُجْعَانٌ   </td>
      <center> <td rowspan="2">  

سُكَّانُ الْقَرْيَةِ    </td></center>
    </tr>
    <tr>
      <th scope="row"><center> 
 <input type="checkbox" id="scales" name="26"
 width="100px" height="100px"  value="2"  >  </center> </th>
      <td colspan="2"> الْجَدُّ وَ الْعَزِيمَةَ    </td>
   
    </tr>
  
  
 
  
  
  </tbody>
</table>
  </div>   </h4>
  </h3>
<br>
<br>
<h3>
    <br>
    <br>

<table class="table">
  <thead>
    <tr>
    
     

  
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td> <center> 
 <input type="checkbox" id="scales" name="27"
 width="100px" height="100px"  value="0"  >  </center>  </td>
 
      <td>صَغِيرٌ  </td>
    </tr>
    <tr>
   
      <td><center> 
 <input type="checkbox" id="scales" name="28"
 width="100px" height="100px"  value="2"  >  </center> </td>
      <td colspan="2">ضَخْمٌ   </td>
      <center> <td rowspan="2">  

      الْفِيلُ   </td></center>
    </tr>
 
  </tbody>
</table>
  </div>   </h4>
  </h3>

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
    
      <td> <center> 
 <input type="checkbox" id="scales" name="29"
 width="100px" height="100px"  value="2"  >  </center>  </td>
 
      <td>وَحْشٌ مُخِيفٌ   </td>
    </tr>
    <tr>
   
      <td><center> 
 <input type="checkbox" id="scales" name="30"
 width="100px" height="100px"  value="0"  >  </center> </td>
      <td colspan="2">مُضْحِكٌ   </td>
      <center> <td rowspan="2">  

      الْمَارِدُ   </td></center>
    </tr>
    <tr>
      <th scope="row"><center> 
 <input type="checkbox" id="scales" name="31"
 width="100px" height="100px"  value="2"  >  </center> </th>
      <td colspan="2"> شِرِّيِرٌ    </td>
   
    </tr>
  
  
 
  
  
  </tbody>
</table>
  </div>   </h4>
  </h3>
<br>
<br>
<h3>

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
$b = DB::table('dars2s')->where('users_id','=',$xx)->get(); 

?>


@foreach ($b as $a  )
<?php
$a1=$a->dars2_1;
$a2=$a->dars2_2;
$a3=$a->dars2_3;
$a4=$a->dars2_4;
$a5=$a->dars2_5;
$a6=$a->dars2_6;
$a7=$a->dars2_7;
$a8=$a->dars2_8;
$a9=$a->dars2_9;
$a10=$a->dars2_10;
$a11=$a->dars2_11;
$a12=$a->dars2_12;
$a13=$a->dars2_13;
$a14=$a->dars2_14;
$a15=$a->dars2_15;
$a16=$a->dars2_16;
$a17=$a->dars2_17;
$a18=$a->dars2_18;
$a19=$a->dars2_19;
$a20=$a->dars2_20;
$a21=$a->dars2_21;
$a22=$a->dars2_22;
$a23=$a->dars2_23;
$a24=$a->dars2_24;
$a25=$a->dars2_25;
$a26=$a->dars2_26;
$a27=$a->dars2_27;
$a28=$a->dars2_28;
$a29=$a->dars2_29;
$a30=$a->dars2_30;
$a31=$a->dars2_31;


?>


<h3 align=" right" > <img  src="11.jpg"  id ="b" onclick="playSound1();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ1)  <span class="season">  أَضَعُ عَلاَمَةً (×) </span>  تَحْتَ الشَخْصِيَاتِ المَذْكُورَةَ فِي النَّصِّ
       </h3>
<br>
 

<center><h1 >إجابتك </h1> </center>  
    <center>
<br>

<h4 align=" right" >  <div class="form-group" > 
  
 <center> <label for=" "> 
 قِطٌّ  </label>  </center>



<center> 
  @if ( $a1 == '0' )

  <h1 style="color:red;"> إجابة خاطئة</h1>
<img    src="check.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 

@elseif ( $a1 == '' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<img    src="uncheck.png"   alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 نَمِرٌ  </label>  </center>

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
          

  سُّكَّانُ القَرْيَة  </label>  </center>
 
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
          

  أَحْمَدُ   </label>  </center>
 
 <center> 
@if ( $a4 == '0' )
   <h1 style="color:red;"> إجابة خاطئة</h1>

   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">   </center>   </div>   </h4>
@else ($a4 =='')
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
<h4> <div class="form-group"> 
  
  <center> <label for=" "> 
          

  سَلْمَى     </label>  </center>
 
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
          

  الْمَارِدُ     </label>  </center>
 
 <center> 
   @if ($a6 == 1 )
   <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
   <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>   </div>   </h4>

@else ( $a6 == ''  )

<h1 style="color:red;"> إجابة خاطئة</h1>
  <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
@endif
<center> <label for=" "> 
          

الْفِيلُ      </label>  </center>
         
         <center> 
           @if ($a7 == 1 )
           <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
           <img    src=" check.png"     alt=" " class="img-fluid"  width="50px" height="50px">  </center>   </div>   </h4>
        
        @else ( $a7 == ''  )
        
        <h1 style="color:red;"> إجابة خاطئة</h1>
          <img    src=" uncheck.png"     alt=" " class="img-fluid"  width="50px" height="50px"> 
        @endif
        
<h2>إصلاح </h2>
<img    src=" corrdars2.jpg"     alt=" " class="img-fluid"  width="600px" height="600px">
<br>
<h3 align=" right" > <img  src="11.jpg"  id ="c" onclick="playSound2();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ2)  <span class="x">  أُكْمِلُ  </span> بِمَا يُنَاسِبُ مِنَ النَّصِّ  
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $a8 == 'القَرْيَةِ' )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a8}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
@elseif ( $a8 == 'القرية'   )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="القَرْيَةِ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @else 

 <h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a8}}" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="القَرْيَةِ" readonly>  (الإطَارُ المَكَانِي)  </label>  </center>
 @endif
</div>   </h4>

<br>
<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 @if ( $a9 =='يَوْمٍ مِنَ الأَيَامِ' )

 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$a9}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 @elseif ( $a9 == 'يوم من الأيام'   )
 <center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="8" value="{{$a9}}"  id="" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


@else
<h1 style="color:red;"> إجابة خاطئة</h1>
 <center><h1 >إجابتك </h1> </center>  
 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="{{$a9}}" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>
 <br>
 <center> <h2>إصلاح </h2>

 دَارَتْ أَحْدَاثُ النَّصِّ فِي <input type="text" name="7"  id="" value="يوم من الأيام" readonly>  (الإطَارُ الزَمَانِي)  </label>  </center>


 @endif
</div>   </h4>
<br>

<h3 align=" right" > <img  src="11.jpg"  id ="x" onclick="playSound3();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ3)  <span class="a">   أَضَعُ عَلَامَـةَ(×)    </span>أَمَـامَ اُلْاجَابَةَ الصَّحِيحَةَ 
       </h3>
<br>
<h3  align=" right" >    : فِي النَّصِّ اِبْتِلاَءَانِ أُصِيبَ بِهِمَا أَهْلُ الْقَرْيَةَ   </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 هُجُومُ الْفِيلَ وَ اِلْتِهَامِهِ لِمَزْرُوعَاتِ سُّكُّانِ الْقَرْيَةِ    </label>  </center>


 @if  ($a10 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
  
@else ($a10 == '' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>

@endif
</div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 تَلَفُ الْمَزْرُوعَاتِ بِسَبَبِ الجَفَافِ      </label>  </center>

 @if  ($a11 == '0' )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
   
@else ($a11 == '' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  

@endif
 </div>   </h4>
<br>
<h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 هُجُومُ المَارِدَ الْعِمْلاَقَ عَلَى الْقَرْيَةِ وَتَدْمِيرِهِ لِكُلِ مَا يَعْتَرِضُ طَرِيقَهُ     </label>  </center>

 @if  ($a12 == '' )
<center><h1 style="color:red;"> إجابة خاطئة</h1> </center>  
   
@else ($a12 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  

@endif
 </div>   </h4>

<center>
<h2>إصلاح </h2>
<img    src=" corrq3.png"     alt=" " class="img-fluid"  width="800px" height="800px">

  </center>



  <h3 align=" right" > <img  src="11.jpg"  id ="iii" onclick="playSound4();"  alt=" " class="img-fluid"  width="60px" height="60px"> ـ4)  <span class="iii">    أَخْتَارُ القَرِينَةَ   </span> التِي تُنَاسِبُ كُلَّ مَعْنَى مِنَ المَعَانِي التَالِي 
       </h3>
<br>

<h4 align=" right" >  <div class="form-group"> 
  
 <center> <label for=" "> 

 لَمْ يُقَاوِمْ أَهْلُ الْقَرْيَةِ هُجُومَ الْفِيلِ • </label>  </center>


 @if  ($a13 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  فَاِنْدَفَعَ سُكَانُ الْقَرْيَةِ صَارِخِينَ فِي كُلِّ اِتِّجَاهٍ يَبْغُونَ الْهَرَبَ وَ طَلَبَ النَّجْدَةِ دُونَ جَدْوَى فَقَدْ اِلْتَهَمَ الْفِيلُ الْمَزْرُوعَاتِ وَ عَبَثَ بِهَا ثُمَّ اِنْصَرَفَ ." size="20"  class="form-group"  id="" readonly>
</center>
@else ($a13 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  فَاِنْدَفَعَ سُكَانُ الْقَرْيَةِ صَارِخِينَ فِي كُلِّ اِتِّجَاهٍ يَبْغُونَ الْهَرَبَ وَ طَلَبَ النَّجْدَةِ دُونَ جَدْوَى فَقَدْ اِلْتَهَمَ الْفِيلُ الْمَزْرُوعَاتِ وَ عَبَثَ بِهَا ثُمَّ اِنْصَرَفَ ." size="65"  class="form-group"  id="" readonly>
  </center>
@endif
  </div>   </h4>

<br>
 <h4> <div class="form-group"> 
  
 <center> <label for=" "> 

 ِشْتَرَطَ الْمَارِدُ عَلَى أَهْلَ الْقَرْيَةِ • 

أَنْ يُنَفِّذُوا كُلَّ أَوَامِرَهُ    </label>  </center>


 @if  ($a14 == '1' )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
    <center>
<input type="text" value="  لَكِنَّ الْمَارِدَ صَاحَ بِصَوْتٍ غَلِيظٍ : إِنْ أَرَدْتُمْ أَنْ أُخَلِّصَكُمْ مِنَ الْفِيلِ , عَلَيْكُمْ أَنْ تُنَفِّذُوا كُلَّ أَوَامِرِي " size="65"  class="form-group"  id="" readonly>
</center>
@else ($a14 == '0' )
<center>
<h1 style="color:red;"> إجابة خاطئة</h1>
</center>
<center>
<h2>إصلاح </h2>
<input type="text" value="  لَكِنَّ الْمَارِدَ صَاحَ بِصَوْتٍ غَلِيظٍ : إِنْ أَرَدْتُمْ أَنْ أُخَلِّصَكُمْ مِنَ الْفِيلِ , عَلَيْكُمْ أَنْ تُنَفِّذُوا كُلَّ أَوَامِرِي " size="65"  class="form-group"  id="" readonly>
  </center>
@endif

 </div>   </h4>


<br>

<h3 align=" right" > <img  src="11.jpg"  id ="aa" onclick="playSound5();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ5)  <span class="aaa">   أَعْطِ وَصْفًا         </span>    يُنَاسِبُ كُلَ شَخْصِيَّةٍ :   
       </h3>
<br>

 
<center><img src="mard.png" alt=" " class="img-fluid"  width="350px" height="350px"></center>
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
    
    <h4 align="center"   > <br>      <h2>إجابتك </h2>  <br>  <input type="text" name="15" value="{{$a15}}" id="" readonly> : الْمَارِدُ  </h4>  
    <br>
    <h2>إصلاح </h2>
     <br>
     <input type="text" name="5" value="شِرْيرٌ"readonly size="10">
    
    </tr>
   
  </tbody>
</table>
</h4>
  </div>   </h4>
<br>
<br>

            
<center><img src="runnn.png" alt=" " class="img-fluid"  width="300px" height="300px"></center>
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
    <h4 align="center"   >  <br>      <h2>إجابتك </h2>  <br>   <input type="text" name="10" value="{{$a16}}" readonly id=""> :  سُّكَّانُ القَرْيَةِ   </h4>  
    <br>
    <h2>إصلاح </h2>
     <br>
     <input type="text" name="5" value="جُبَنَاءٌ" readonly size="10">
    </tr>
    
   
  </tbody>
</table>
</h4>
  </div>   </h4>

  
<br>

<div class="form-group" >  



<center><img src="elefent.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
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
    
   <center><h4 align="center"   > <br>      <h2>إجابتك </h2>  <br> <input type="text" name="17" size="10" value="{{$a17}}"  id="" readonly > :  الْفِيل  </h4>  
   </center>  
   <br>
    
    <center><h2>إصلاح </h2></center>
     <br>
     <center><input type="text" name="15" size="10" value="ضَخْمٌ" readonly> 
     </center>
  </tr>
   
   
  </tbody>
</table>
</div>
</h4>
  </div>   </h4>



</div>

<h3 align=" right" > <img  src="11.jpg"  id ="xx" onclick="playSound6();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ6)  <span class="xx">  
أَضَعُ عَلَامَةَ (×)   </span>أَمَامَ المُرَادَفَةِ المُنَاسِبَةِ لِلْكَلِمَاتِ المُسَطَّرَةِ حَسَبَ مَا يُفِيدُ مَعْنَاهَا فِي الْجُمْلَةِ 
       </h3>
<br>

@if ( $a18 == 1)


<h4 align=" right"  id ="ppp"  onclick="playSound7();" >     <u class="ppp">فَلَّحَ</u>  أَهْلُ الْقَرْيَةِ الأَرْض    </h4>   
<center><img src="farm.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="حَرَثَ"  size="2"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a18 == '' )



<h4 align=" right"  id ="ppp"  onclick="playSound7();" >     <u class="ppp">فَلَّحَ</u>  أَهْلُ الْقَرْيَةِ الأَرْض    </h4>   
<center><img src="farm.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
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
<input type="text" value="حَرَثَ"  size="2"  class="form-group"   readonly>
</h3>

@elseif( $a18 == 0 )



<h4 align=" right"  id ="ppp"  onclick="playSound7();" >     <u class="ppp">فَلَّحَ</u>  أَهْلُ الْقَرْيَةِ الأَرْض    </h4>   
<center><img src="farm.png" alt=" " class="img-fluid"  width="500px" height="500px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
<br>  <input type="text" value="سَقَى"  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="حَرَثَ"  size="2"  class="form-group"   readonly>
</h3>
@endif




@if ( $a19 == 1)


<h4 align=" right" id="bbb"   onclick="playSound8();" >  <u class="bbb">حَطَّمَ </u>  الْمَارِدُ كُلَ مَا اِعْتَرَضَ طَرِيقَهُ    </h4>              
<center><img src="strong.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
       <h3>
<input type="text" value="هَدَّمَ / أَفْسَدَ"  size="10"  class="form-group"   readonly>
</h3>
     </div>

@elseif( $a19 == '' )



<h4 align=" right" id="bbb"   onclick="playSound8();" >  <u class="bbb">حَطَّمَ </u>  الْمَارِدُ كُلَ مَا اِعْتَرَضَ طَرِيقَهُ    </h4>              
<center><img src="strong.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
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
<input type="text" value="هَدَّمَ / أَفْسَدَ"  size="10"  class="form-group"   readonly>
</h3>
@elseif( $a19 == 0 )



<h4 align=" right" id="bbb"   onclick="playSound8();" >  <u class="bbb">حَطَّمَ </u>  الْمَارِدُ كُلَ مَا اِعْتَرَضَ طَرِيقَهُ    </h4>              
<center><img src="strong.png" alt=" " class="img-fluid"  width="400px" height="400px"></center>
<br>
<br>
<h4>
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <br>  <input type="text" value="أَصْلَحَ"  size="2"  class="form-group"   readonly>
</center>
<center>
<h2>إصلاح </h2>
<h3>
<input type="text" value="هَدَّمَ / أَفْسَدَ"  size="10"  class="form-group"   readonly>
</h3>
@endif






<h3 align=" right" > <img  src="11.jpg"  id ="ooo" onclick="playSound9();"  alt=" " class="img-fluid"  width="60px" height="60px">ـ7)  <span class="ooo">  
أَضَعُ عَلَامَةَ (×)   </span> أَمَامَ مَا يُنَاسِبُ :
       </h3>
<br>
<h3 align=" right" > : الْفِيلُ هُو شَخْصِيَّةٌ  </h3>
 <br>
 <h4>



@if ($a20== 1)

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
     <input type="text" value="مُعَرْقِلَةٌ"  size="2"  class="form-group"   readonly>
     </div>

@elseif ($a20== 0)
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <br> <h3><input type="text" value="مُسَاعِدَةٌ"  size="5"  class="form-group"   readonly></h3> 
</center>
<center>
<h2>إصلاح </h2>
 <h3> <input type="text" value="مُعَرْقِلَةٌ"  size="2"  class="form-group"   readonly></h3>
@elseif ($a20=='')
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <br>  <h3><input type="text" value=""  size="5"  class="form-group"   readonly></h3>
</center>
<center>
<h2>إصلاح </h2>
<h3><input type="text" value="مُعَرْقِلَةٌ"  size="2"  class="form-group"   readonly></h3>


@endif

<br>
<h3 align=" right" > :الْمَارِدُ هُو شَخْصِيَّةٌ  </h3>
<br>


@if ($a22== 1)

<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
       <div class="form-group" > 
   <h3> <input type="text" value="مُسَاعِدَةٌ"  size="5"  class="form-group"   readonly></h3> 
     </div>

@elseif ($a22== 0)
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <br>  <h3><input type="text" value="مُعَرْقِلَةٌ"  size="2"  class="form-group"   readonly></h3>
</center>
<center>
<h2>إصلاح </h2>
<h3><input type="text" value="مُسَاعِدَةٌ"  size="5"  class="form-group"   readonly></h3>
@elseif ($a22== '')
<h1 style="color:red;"> إجابة خاطئة</h1>
  <br>
  <h1 style="color:blue;">  إجابتك</h1>
  <br> <h3> <input type="text" value=""  size="2"  class="form-group"   readonly></h3>
</center>
<center>
<h2>إصلاح </h2>
<h3><input type="text" value="مُسَاعِدَةٌ"  size="5"  class="form-group"   readonly></h3>
</center>
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
@elseif  (   $ty == 2 )
<h1>   {{$a}} /10 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 4 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="07.png" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 6 )
<h1>   {{$ty}} /10 </h1> <br>
<img align=" right" src="811.jpg" alt=" " class="img-fluid"  width="100px" height="100px">
@elseif  (   $ty == 8 )
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
<h3 align=" right" > <img  src="11.jpg"  id ="bbbb" onclick="playSound10();"  alt=" " class="img-fluid"  width="60px" height="60px">   ـ8)  <span class="bbbb">  أَضَعُ عَلَامَةَ (×) </span> أَمَامَ الأَوْصَافَ التي تُنَاسِبُ كُلَ شَخْصِيَّةٍ
       </h3>
<br>

<h3>
    <br>
    <br>


<h3  align="center" >  سُكَّانُ الْقَرْيَةِ</h3>



@if ($a24 == 2 & $a26 == 2)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

<img src="q27.png" alt=" " class="img-fluid"  width="500px" height="500px">

@elseif (  $a25 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
<h2>إصلاح </h2>
<img src="q27.png" alt=" " class="img-fluid"  width="500px" height="500px">
</center>
@elseif ( $a25 == 0 &&  $a24 == 2 && $a26 == 2   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
<h2>إصلاح </h2>
<img src="q27.png" alt=" " class="img-fluid"  width="500px" height="500px">
</center>

@endif

<br>

<h3  align="center" >  الْفِيلُ</h3>



@if ($a28 == 2  )
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

<img src="corrs2.png" alt=" " class="img-fluid"  width="500px" height="500px">

@elseif (  $a27 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
<h2>إصلاح </h2>
<img src="corrs2.png" alt=" " class="img-fluid"  width="500px" height="500px">
</center>

@endif
<br>


<h3  align="center" >   الْمَارِدُ</h3>



@if ($a29 == 2 & $a31 == 2)
<center><h1 style="color:green;" >إجابة صحيحة</h1> </center>  
     <center>
<br>

<img src="last.png" alt=" " class="img-fluid"  width="500px" height="500px">

@elseif (  $a30 == 0   )
<center> <h1 style="color:red;"> إجابة خاطئة</h1> </center>
<center>
<h2>إصلاح </h2>
<img src="last.png" alt=" " class="img-fluid"  width="500px" height="500px">
</center>

@endif





















@endforeach


 <br>
 <br>

<center>  <a href="{{ route('resetDars2',['id' => $x ,'tt' => $xx ])   }}" class="btn btn-danger">إعادة المحاولة</a>
<a href="{{ route('index')}}" class="btn btn-info">الصفحة الرئيسية</a>

@endif



 

 

</form></body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>


</html>

