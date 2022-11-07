
<script type="text/javascript" src="js/jquery.min.js"></script>
		  <script>
			$(document).ready(function(){
				$('#bb').click(function(){
					$('.aa').css('color','red');
				});
				
				$('.reafficher').click(function(){
					$('.red').show();
				});
			});
		  </script>

<audio id="audio" src="ttsMP3.com_VoiceText_2021-12-26_23_37_6.mp3" autoplay="false" ></audio>
 <center> <h1>  ألون الأشكال 
<a class="aa"> المتشابهة </a>  </h1> </center> 
   <center><button id="bb" onclick="playSound();">Play</button></center> 
    <script>
    function playSound() {
          var sound = document.getElementById("audio");
          sound.play();
      }
    </script>
