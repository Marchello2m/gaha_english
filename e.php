<html>
    <head>
<!-- Debug: Bootstrap Inserted by WordPress Twitter Bootstrap CSS plugin v3.3.6-1 http://icwp.io/w/ -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" />
<!-- / WordPress Twitter Bootstrap CSS Plugin from iControlWP. -->
        <script type="text/javascript">

      var isInIframe = (parent !== window),
        parentUrl = null;

        if (isInIframe) {
            parentUrl = document.referrer;
        }

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-35290874-1']);
      _gaq.push(['_setCustomVar',
      1,                   // This custom var is set to slot #1.  Required parameter.
      'Parent URL',     // The name acts as a kind of category for the user activity.  Required parameter.
      parentUrl          // This value of the custom variable.  Required parameter.      
      ]);
      _gaq.push(['_trackPageview']);


      

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

        </script>
    </head>
<body style="padding:0px; margin:0px; background-color:transparent;">
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/wheel.js?v=2" type="text/javascript"></script>	
<div style="position: relative;">
<canvas id="wheelcanvas" style="position: absolute; left: 0; top: 0; z-index: 0;" width="300" height="300">
<br/><br/><div style="background:white; padding:15px;"><h2>avoid</h2><br/><a href="http://wheeldecide.com/index.php?c1=avoid&c2=can%E2%80%99t+help&c3=+admit&c4=+dislike&c5=enjoy&c6=consider&c7=deny&c8=+feel+like&c9=+finish&c10=keep&c11=+don%E2%80%99t+mind&c12=+practise&c13=+spend+time&c14=suggest&c15=recommend&c16=miss&c17=want&c18=+ask%2C+&c19=mean%2C+&c20=manage%2C&c21=+would+like%2C&c22=+agree%2C+&c23=need%2C+&c24=offer&c25=decide%2C&c26=hope&c27=+%28can%E2%80%99t%29+afford&c28=+expect&c29=learn&c30=plan&c31=pretend&c32=+refuse&c33=++promise&c34=allow&col=winter&time=3&remove=1">Spin Again</a></div><br/><br/>You'll have to take our word for it that the wheel landed on <span style="color:#CCFFCC; font-weight:bold;">avoid</span>. Your browser cannot display the wheel of choices. Please upgrade to a newer browser that supports HTML5 (most new ones do). Wheel Decide would normally show a wheel right here with choices that you can set (lunch, games, dinner, anything!). You can spin it to get a random decision. Make your own wheel of dinner, wheel of fortune, wheel of lunch, wheel of whatever you want now!<br/><br/>
</canvas>
<canvas id="wheelcanvastop" style="position: absolute; left: 0; top: 0; z-index: 1;" width="300" height="300" onclick="spin();" onmousedown="wheelMouseDown(event);" onmousemove="wheelMouseMove(event);" onmouseup="wheelMouseUp(event); spin();" onmouseout="wheelMouseUp(event);" >
</canvas>
</div>




<audio id="wheelAudio" preload="auto"  >
  <source src="sounds/WheelDecideFX1_Soft_Short.ogg" type="audio/ogg">
  <source src="sounds/WheelDecideFX1_Soft_Short.mp3" type="audio/mpeg">
</audio>
<audio id="wheelAudio2" >
  <source src="sounds/WheelDecideFX1_Soft_Short.ogg" type="audio/ogg">
  <source src="sounds/WheelDecideFX1_Soft_Short.mp3" type="audio/mpeg">
</audio>
<audio id="wheelAudio3" >
  <source src="sounds/WheelDecideFX1_Soft_Short.ogg" type="audio/ogg">
  <source src="sounds/WheelDecideFX1_Soft_Short.mp3" type="audio/mpeg">
</audio>
<audio id="wheelAudioFinal" preload="auto" >
  <source src="sounds/wd-sound-fx-end.ogg" type="audio/ogg">
  <source src="sounds/wd-sound-fx-end.mp3" type="audio/mpeg">
</audio>
<br/>
<div id="wheelbuttons" style="right:0px; bottom:0px; position:absolute; z-index:1000;">
<a href='words.php'><button class="btn" id="modifywheel" onclick="./words.php" >Modify Wheel</button> </a>
<img src="images/wd-audio-on.png" id="mutebutton" onclick="toggleMute(this);" value="Mute" /><a target="_new" title="Wheel Decide | Make Your Own Wheel!" href="http://wheeldecide.com/?c1=avoid&c2=can%E2%80%99t+help&c3=+admit&c4=+dislike&c5=enjoy&c6=consider&c7=deny&c8=+feel+like&c9=+finish&c10=keep&c11=+don%E2%80%99t+mind&c12=+practise&c13=+spend+time&c14=suggest&c15=recommend&c16=miss&c17=want&c18=+ask%2C+&c19=mean%2C+&c20=manage%2C&c21=+would+like%2C&c22=+agree%2C+&c23=need%2C+&c24=offer&c25=decide%2C&c26=hope&c27=+%28can%E2%80%99t%29+afford&c28=+expect&c29=learn&c30=plan&c31=pretend&c32=+refuse&c33=++promise&c34=allow&col=winter&time=3&remove=1"><img width="50" src="images/wheel-decide-logo-edit.png" /></a><br/>
</div>


</center>
<!--Change the words in js.words-->
<script type="application/javascript">
  var colors = [ "#96F3FF", "#C9C9C9", "#369AFF", "#FFFFFF", "#3842B0"];
 // var restaurants = ["avoid","can\u2019t help"," admit"," dislike","enjoy","consider","deny"," feel like"," finish","keep"," don\u2019t mind"," practise"," spend time","suggest","recommend","miss","want"," ask, ","mean, ","manage,"," would like,"," agree, ","need, ","offer","decide,","hope"," (can\u2019t) afford11111111"," expect","learn","plan","pretend"," refuse","  promise","allow"];
  
  var restaurants = <?php echo require('js/words.json');?>;
  
  var weights = [];		
        function setWeightedVariables() {
            numOptionsWeighted = restaurants.length;
            if (weights.length > 0) {
                for (var i = 0; i < weights.length; i++) {
                    numOptionsWeighted += weights[i] - 1;
                }
            }
            arc = Math.PI / (numOptionsWeighted / 2);
            wedgeAngle = Math.PI * 2 / numOptionsWeighted;
            
            var desChoice = -1;
            desChoiceWeighted = desChoice;
            for (var i = 0; i < weights.length && i < desChoice; i++) {
                desChoiceWeighted += weights[i] - 1;
            }
            halfDesChoiceWeight = 0.5;
            if (weights.length > desChoice) {
                halfDesChoiceWeight = weights[desChoice] * 0.5;
            }
                            
        }        
                
	var numcolors = colors.length;
	var numoptions = restaurants.length;
        
        var numOptionsWeighted;
        var arc;
        var desChoiceWeighted;
        var halfDesChoiceWeight;
        
        setWeightedVariables();
    
        if (numOptionsWeighted % 2 == 1) {
            isOddNumberOfChoices = true;
            isFirstSpinCycle = true;
        }
	
  var isCustomWidth = false;  
  var canv = document.getElementById("wheelcanvas");
  var canvTop = document.getElementById("wheelcanvastop");
  

var isMobile = false;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 isMobile = true;
}
	var minDimension = 500;
	if (isMobile) {
		canvasWidth = canv.width;
		var mutebutton = document.getElementById('mutebutton');
		toggleMute(mutebutton);
	}
	try {
		//if (window.frameElement) {
			//maxWidth = window.frameElement.offsetWidth;
			//maxHeight = window.frameElement.offsetHeight;
                        maxWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
                        maxHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
		//}
		minDimension = Math.min(maxWidth, maxHeight);
	} catch(err) {
        
    }
	
  
  var canvasWidth = minDimension;		canv.width = canvasWidth;
		canv.height = canvasWidth;
		wheelSize = canvasWidth;
		canvTop.width = canvasWidth;
		canvTop.height = canvasWidth;
		
		var context = canvTop.getContext('2d');
        var imageObj = new Image();

        imageObj.onload = function() {
        context.drawImage(imageObj, 0, 0, canvasWidth, canvasWidth);
      };
      imageObj.src = 'images/WD-Click-to-Spin.png';
  
  var wheelRadius = wheelSize * 0.5;
  var outsideRadius = wheelRadius;
  var textRadius = wheelRadius * 0.9;
  var insideRadius = wheelRadius *0.1;
  
  function wheelMouseDown(e) {
    clearTopCanvas();
	drawArrow();
	 var wheeldiv = document.getElementById("wheelcanvastop");
    midX = wheeldiv.offsetLeft+wheelRadius+wheeldiv.offsetParent.offsetLeft;
	 midY = wheeldiv.offsetTop+wheelRadius+wheeldiv.offsetParent.offsetTop;
	 lastX=e.clientX;
	 lastY=e.clientY;
    isMouseDown = true;
  }
  
  function drawRouletteWheel() {
    var canvas = document.getElementById("wheelcanvas");
    if (canvas.getContext) {
    
      ctx = canvas.getContext("2d");
      ctx.setTransform(1, 0, 0, 1, 0, 0);
	  ctx.clearRect(0,0,canv.width,canv.height);
	  ctx.strokeStyle = "black";
      ctx.lineWidth = 0;
      ctx.translate( canvas.width/2 , canvas.height/2 );
      ctx.font = 'bold 12px sans-serif';
      var weightedIndex = 0;
      for(var i = 0; i < numoptions; i++) {
          var weightedArc = arc;
          var weight = 1;
          if (weights.length > i) {
              weight = weights[i];
              weightedArc = arc * weight;
          }
         
        var angle = startAngle + weightedIndex * arc;
        ctx.fillStyle = colors[i%numcolors];
        
        ctx.beginPath();
        var endAngle = angle + weightedArc;
        // Chrome 43.0.2357.81 m arc issue
        if (endAngle > 6.282 && endAngle < 6.284) {
            endAngle = 6.282;
        }
        ctx.arc(0,0, outsideRadius, angle, endAngle, false);
        ctx.arc(0,0, insideRadius, endAngle, angle, true);
        ctx.fill();
        
        ctx.save();
		  
		  
		  ctx.fillStyle = "black";			var angHalfArc = angle + weightedArc * 0.5 - 0.04;
        ctx.translate(Math.cos(angHalfArc) * textRadius, Math.sin(angHalfArc) * textRadius);
        ctx.rotate(angHalfArc + Math.PI);
        var text = restaurants[i];
		  
		  ctx.font = 'bold '+choiceTextSize[i]+'px sans-serif';
		 
		 textHWidth = ctx.measureText(text).width;
		if (textHWidth > textRadius - 30) {
				text = text.substring(0,27) + "...";	
		}
		 
		 
		  ctx.fillText(text, 0, 0);
        ctx.restore();
        weightedIndex += weight;
      } 
      
	  drawArrow();
    }
  }
    
  function spin() {
    clearTopCanvas();
	drawArrow();
    var minTimeToSpin = 3;
    var timeRange = 4;
	 var minAngleToStartRotating = 20;
	 var angleRange = 30;
    spinTime = 0;
    spinTimeTotal = minTimeToSpin * 1000;
	//playSound();
    angleSinceBeep = 0;
	timeSinceBeep = 0;
	 slowDown = false;
	 var desChoice = -1;
	 if (desChoice == -1) {
	    spinAngleStart = Math.random() * angleRange + minAngleToStartRotating; 
		setWheelImageSource();
		rotateWheelImage();
	 } else {
	    spinAngleStart = 45;
		setWheelImageSource();
		rotateWheelPreset();
	}

  }
  
  
  
  
  function setChoiceFontSizes() {
  // get the font size of each choice
	 var canvas = document.getElementById("wheelcanvas");
    if (canvas.getContext) {
      ctx = canvas.getContext("2d");
		choiceTextSize = [];
		for(var i = 0; i < numoptions; i++) {
			var text = restaurants[i];
			ctx.font = 'bold 18px sans-serif'; 
			var textHWidth = ctx.measureText(text).width;
			if (textHWidth > textRadius - 30) {
				ctx.font = 'bold 15px sans-serif';
				textHWidth = ctx.measureText(text).width;
				if (textHWidth > textRadius - 30) {
					choiceTextSize.push("12");
				} else {
					choiceTextSize.push("15");
				}
			} else {
				choiceTextSize.push("18");
			}
		}
		
				  font_backup = choiceTextSize.slice(0);		
		
	}
  }
  
function rotateWheelPreset() {
    spinTime += 30;
    if(spinTime >= spinTimeTotal) {
      stopRotateWheelImage();
      return;
	} else if (slowDown) {
		var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
		startAngle += (spinAngle * Math.PI / 180);
		drawRouletteWheel(); 
		spinTimeout = setTimeout('rotateWheelPreset()', 30);
	} else {
		var spinAngle = 20;
		startAngle += (spinAngle * Math.PI / 180);
		if (spinTime >= spinTimeTotal - 3600)  {
			var desChoice = -1;
			var desAngle;
                        
                        if (weights.length > 0) {
                            desAngle = (numOptionsWeighted - desChoiceWeighted - halfDesChoiceWeight) / numOptionsWeighted * 2*Math.PI;
                        } else {
                            desAngle = (numoptions - desChoice - halfDesChoiceWeight) / numoptions * 2*Math.PI;
                        }
                        
			var modAngle = startAngle % 2*Math.PI;
			var minAngle, maxAngle;
			var isWithin = false;
                        minAngle = desAngle - 0.1;
                        maxAngle = desAngle + 0.1;
                        if (modAngle < maxAngle && modAngle > minAngle) {
                            isWithin = true;
                        }
			if (isWithin) {
                            startAngle = desAngle;
                            spinTime = spinTimeTotal - 3677;
                            slowDown = true;
			}
		}
		drawRouletteWheelImage(spinAngle);
		spinTimeout = setTimeout('rotateWheelPreset()', 30);
	}
  }
 

  
    var choice_backup = restaurants.slice(0);var font_backup = [];var weights_backup = weights.slice(0);  

  
  function stopRotateWheelImage() {
    clearTimeout(spinTimeout);
	
	var choice = getCurrentChoiceWithWeights();
	var text = choice.text;
	var index = choice.index;
	 
	var canvasTop = document.getElementById("wheelcanvastop");
	if (canvasTop.getContext) {
		
		ctxTop = canvasTop.getContext("2d");
		 
		ctxTop.font = 'bold 30px sans-serif';
		var textHWidth = ctxTop.measureText(text).width*0.5;
		if (textHWidth > wheelRadius) {
		  ctxTop.font = 'bold 12px sans-serif';
		  textHWidth = ctxTop.measureText(text).width*0.5;
		}
		
                var imageObj = new Image();

                imageObj.onload = function() {
                       ctxTop.drawImage(imageObj, 0, 0, canvasWidth, canvasWidth);
                       ctxTop.fillStyle = "white";
                       ctxTop.fillText(text, canvasWidth/2 - textHWidth, canvasWidth/2 + 10);
                };
                imageObj.src = 'images/stop-message-gradient-500.png';
                if (!isMuted) {
                    var audioFinal = document.getElementById("wheelAudioFinal");
                    audioFinal.play();
                }
	}
	
	
	                     if (restaurants.length > 1) {
                        restaurants.splice(index, 1);
                        choiceTextSize.splice(index,1);
                        if (index < weights.length) {
                            weights.splice(index,1);
                        }
                        numoptions = numoptions - 1;
                        arc = Math.PI / (numoptions / 2);
                    } else {
                        restaurants = choice_backup.slice(0);
                        choiceTextSize = font_backup.slice(0);
                        weights = weights_backup.slice(0);
                        numoptions = restaurants.length;
                        arc = Math.PI / (numoptions / 2);
                    }
                    setWeightedVariables();
                    
                    wheelImage = new Image();
                    drawRouletteWheel();
                    setWheelImageSource();
			           }
  

  addTouchEventListeners();
  draw();
  
  function listener(event){
	if (event.data == "spin") {
	  spin();
	  }
  }

	try {
		if (window.addEventListener){
			addEventListener("message", listener, false)
		} else {
			attachEvent("onmessage", listener)
		}
	} catch(err) {
        
	}
</script>
</body>
</html>
