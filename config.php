<?php
define("GO", "ctx.");
$editor = '';
/*
DATENBANK ANBINDUNG
*/
function OpenDB(){ //öffne datenbank verbindung
	$link = "";
	 try {
	   $link = new PDO('mysql:host=localhost;dbname=golfbahnen;charset=UTF8', 'root', '');
       $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	 }
	catch (PDOException $e) {
        p($e);
    }
	catch (Exception $e){
		p($e);
	}
    
    return $link;
}
function p($val) { // fehlerausgabe
        echo '<pre>' . print_r($val, true) . '</pre>';
    }
function CloseDB(&$link){ //datenbank verbindung schliessen
    $link = null;
}
function javaContent($logik, $map){ //alle canvas funktionen hier rein
$stack[$map] = $logik;
$firstLogik ='
  var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() {  
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas.width,mycanvas.height); 
}';
$lastLogik = '
var setted = true;
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#edit" ).on("click", function(e) {
  $(".editing").each(function(i){
	  console.log($(this).css("top")+" "+ $(this).css("left"));
  });
if(setted == true){
	$( ".editing" ).show();
	setted = false;
	}
else{
	$( ".editing" ).hide();
	setted = true;
}
});


$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps='.$map.'";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});
var collect = new Array();
$( ".editing" ).on("click", function(e) {
	e.preventDefault();
	$(\'#saver\').show();
	$(this).css("background","red");
	collect.push($(this).attr("id"));
});	
$( "#saver" ).on("click", function(e) {
	e.preventDefault();
	var delets = JSON.stringify(collect);
	$.ajax({
		type: \'GET\',
		url:  "response.php?seite=maps&maps='.$map.'&saving="+delets,
		success: function(msg) {
			$(\'.container\').fadeOut(800, function(){
				$(\'#loader\').hide();
				$(\'.container\').html(msg).fadeIn().delay(1200);
			});
		}
	});
});	
mycanvas.addEventListener("mouseout", function(e) { 
  window.cancelAnimationFrame(raf);
  running = false;
});
	$( "#draw" ).on("click", function(e) {
		var flag = false,
        prevX = 0,
        currX = 0,
        prevY = 0,
        currY = 0,
        dot_flag = false;

    var x = "blue",
        y = 2;
    init();
    function init() {
	w = c.width;
	h = c.height;

	c.addEventListener("mousemove", function (e) {
		findxy(\'move\', e)
	}, false);
	c.addEventListener("mousedown", function (e) {
		findxy(\'down\', e)
	}, false);
	c.addEventListener("mouseup", function (e) {
	   findxy(\'up\', e)
	}, false);
	c.addEventListener("mouseout", function (e) {
		findxy(\'out\', e)
	}, false);
    }
function drawing() {
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(currX, currY);
        ctx.strokeStyle = x;
        ctx.lineWidth = y;
        ctx.stroke();
        ctx.closePath();
    }
function findxy(res, e) {
        if (res == \'down\') {
            prevX = currX;
            prevY = currY;
            currX = e.clientX - c.offsetLeft;
            currY = e.clientY - c.offsetTop;
    
            flag = true;
            dot_flag = true;
            if (dot_flag) {
                ctx.beginPath();
                ctx.fillStyle = x;
                ctx.fillRect(currX, currY, 2, 2);
                ctx.closePath();
                dot_flag = false;
            }
        }
        if (res == \'up\' || res == "out") {
            flag = false;
        }
        if (res == \'move\') {
            if (flag) {
                prevX = currX;
                prevY = currY;
                currX = e.clientX - c.offsetLeft;
                currY = e.clientY - c.offsetTop;
                drawing();
            }
        }
    }
});
function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
	console.log(evt.clientX);
	console.log(evt.clientY);
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top
    };
}
mycanvas.addEventListener("click", function(e) {
    var pos = getMousePos(mycanvas, e);
	posx = pos.x;
	posy = pos.y;
console.log("Maus X: "+posx); console.log("Maus Y: "+posy);

}, false);
container.draw();
ball.draw();';
$javaContentArray = array(1=>'
var c= document.getElementById("mycanvas"),
ctx=c.getContext("2d"),raf,running = false,red = false,blue = false,redSwitch = false,redSwitchnext = false, mouse={}, redSwitch2=false,redSwitchnext2=false;

var container = {
  draw: function(){
	'.$stack[$map].'
  }
};
'.$firstLogik.'
function draw() {
  clear();
  ball.draw();
  container.draw();
 
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
  }
   if(red == true){ 
	if(redSwitch == false){
		ball.x += 4.7;
		ball.y += 3;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 255 && ball.y > 308){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	if(ball.x > 783 && ball.y < 250){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
	if(redSwitch == true){
		ball.y -= 4.8;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 375 && ball.y < 169){
			redSwitch = false;
		}
		
	}
	if(redSwitchnext==true){
		ball.y -= 0.01;
		ball.x += 13.6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y < 305){
			redSwitchnext = false;
		}
	}
  }
  
}
'.$lastLogik, 
2=>'
var canvas = document.getElementById("mycanvas2");
var ctx = canvas.getContext("2d");

var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext = false;
var rednext=false;
var container = {
draw: function(){
	'.$stack[$map].'
}
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};

function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas2.width,mycanvas2.height);  
  }
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
 
  raf = window.requestAnimationFrame(draw);
  
  
  if(red == true){ 
	if(redSwitch == false){
		ball.x += 8;
		ball.y += 2;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x>400 && ball.y>305){
		redSwitchnext=true;
		console.log("Route wechseln");
	}
	if(redSwitchnext==true){
		ball.x +=4;
		ball.y -=10;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>600 && ball.y<170){
			rednext=true;
			console.log("Route wechseln");
		}
		if(rednext==true){
			ball.x +=4;
			ball.y +=13;
			console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
			if(ball.x>790 && ball.y>235){
				running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
			}
		}
	}
	
  }
  
}
$( "#blue" ).on("click", function(e) { 
  if (!running) {
    raf= window.requestAnimationFrame(draw);
    running= true;
	blue= true;
  }
});
$( "#red" ).on("click", function(e) { 
  if (!running) {
    raf= window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=2";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});

container.draw();
ball.draw();
',
3=>'
var c= document.getElementById("mycanvas3");
	var ctx=c.getContext("2d");
	var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext=false;
var container = {
  draw: function(){
 '.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 220,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
   ctx.beginPath();
		ctx.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		ctx.closePath();
		ctx.fillStyle=this.color;
		ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas3.width,mycanvas3.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  

 
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 785){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  
   if(red == true){ 
	if(redSwitch == false){
		ball.x += 5;
		ball.y += 3.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 350 && ball.y > 380){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x>350 && ball.y>380){
		redSwitchnext=true;
		console.log("Route wechseln");
	}
	
	if(redSwitch == true){
		ball.y -= 6;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x >710 && ball.y <205){
			redSwitch = false;
			redSwitchnext=true;
		}
		
	}
	if(redSwitchnext==true){
		ball.y+=0.5;
		ball.x+=7;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>780 && ball.y>220){
			running=false;
			window.cancelAnimationFrame(raf);
			console.log("Ende");
		}
	}

 
}
};
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});


$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=3";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});


container.draw();
ball.draw();
',
4=>'
var c = document.getElementById("mycanvas4");
	var ctx = c.getContext("2d");
   
 var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext=false;
var rednext=false;

var container = {
  draw: function(){
'.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
   ctx.beginPath();
		ctx.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		ctx.closePath();
		ctx.fillStyle=this.color;
		ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas4.width,mycanvas4.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  raf = window.requestAnimationFrame(draw);
  
if(red == true){ 
	if(redSwitch == false){
		ball.x += 7;
		ball.y += 3.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 250 && ball.y > 308){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	if(ball.x > 784 && ball.y < 248){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
	if(redSwitch == true){
		ball.y -= 6;
		ball.x += 4;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 350 && ball.y < 169){
			redSwitch = false;
		}
		
	}
	if(redSwitchnext==true){
		ball.y -= 0.015;
		ball.x += 13.4;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y < 305){
			redSwitchnext = false;
			rednext==true;
		}
	}
	
  }

}

$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=4";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});
container.draw();
ball.draw();
',
5=>'
var c=document.getElementById("mycanvas5");

var ctx=c.getContext("2d");
var raf;
var running = false;
var red = false;
var redSwitch = false;
var redSwitchnext = false;
var container = {
  draw: function(){
	  '.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas5.width,mycanvas5.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
 
  raf = window.requestAnimationFrame(draw);
  
  
	

  if(red == true){ 
	if(redSwitch == false){
		ball.x += 8;
		ball.y -= 2;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 400 && ball.y <170){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	
	if(redSwitch == true){
		ball.y += 3;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y >305){
			redSwitchnext = true;
		}
	
  }
  if(redSwitchnext==true){
	  ball.x +=5;
	  ball.y -=7;
	  if(ball.x > 780 && ball.y <230){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
  }
  
}
}

$( "#red" ).on("click", function(e5) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=5";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});


container.draw();
ball.draw();
',

6=>'
var c = document.getElementById("mycanvas6");
	var ctx = c.getContext("2d");
   
 var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext=false;
var rednext=false;
var finalred=false;
var final=false;
var container = {
  draw: function(){
'.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 330,
  y: 480,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
   ctx.beginPath();
		ctx.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		ctx.closePath();
		ctx.fillStyle=this.color;
		ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas6.width,mycanvas6.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  
  
 
  raf = window.requestAnimationFrame(draw);
  
if(red == true){ 
	if(redSwitch == false){
		ball.x -=3 ;
		ball.y -= 5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x<250 && ball.y<350){
		redSwitch=true;
		console.log("Route wechseln");
	}
	if(redSwitch==true){
		ball.x +=2;
		ball.y -=6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>290 && ball.y<235){
			redSwitchnext=true;
			console.log("Route wechseln");
		}
	}
	if(redSwitchnext==true){
		ball.x +=10;
		ball.y -=0.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>420 && ball.y<170){
			finalred=true;
			console.log("Route wechseln");
		}
	}
	if(finalred==true){
		ball.x +=10;
		ball.y +=15;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>911 && ball.y>320){
			final=true;
			console.log("Route wechseln");
		}
	}
	if(final==true){
		ball.x -=55;
		ball.y -=45;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x<785 && ball.y<250){
			running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
		}
	}
	
	
	
	
	
  }
  

}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});

$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=6";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});
container.draw();
ball.draw();

',
7=>'
var c = document.getElementById("mycanvas7");
	var ctx = c.getContext("2d");
   
  var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext=false;
var container = {
  draw: function(){
'.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 220,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
   ctx.beginPath();
		ctx.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		ctx.closePath();
		ctx.fillStyle=this.color;
		ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas7.width,mycanvas7.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  
  
 
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 850){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  
  
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});

$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=7";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});


container.draw();
ball.draw();
',
8=>'
var c = document.getElementById("mycanvas8");
	var ctx = c.getContext("2d");
 var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext=false;
var rednext=false;
var blueSwitch=false;
var blueSwitchnext=false;
var bluenext=false;
var container = {
  draw: function(){
	  '.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 113,
  y: 238,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
   ctx.beginPath();
		ctx.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		ctx.closePath();
		ctx.fillStyle=this.color;
		ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas8.width,mycanvas8.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();

  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
  if(blueSwitch==false){
	  
  
	ball.x +=7;
	ball.y -=1;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
  }
  if(ball.x>600 && ball.y<180){
	  blueSwitch=true;
  }
  if(blueSwitch==true){
	  ball.x +=4.5;
	  ball.y +=0.1;
	 console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	 if(ball.x>920 && ball.y>120){
		 blueSwitchnext=true;
	 }
  }
  if(blueSwitchnext==true){
	  ball.x -=10;
	  ball.y +=4;
	  console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	  if(ball.x<810 && ball.y<265){
		  bluenext=true;
	  }
	  
  }
  if(bluenext==true){
	  ball.x -=10;
	  ball.y -=10;
	  if(ball.x<760 && ball.y<240){
		  running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	  }
  }
  }
  if(red == true){ 
	if(redSwitch == false){
		ball.x +=7 ;
		ball.y += 1;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	
	
	if(ball.x > 600 && ball.y > 302){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	
	
	if(redSwitch == true){
		ball.y -= 0.1;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x>923 && ball.y>288){
			redSwitchnext=true;
			console.log("Route wechseln");
		}
		
	}
	if(redSwitchnext==true){
		ball.x -=20;
		ball.y -=14;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x<810 && ball.y<215){
			rednext=true;
			console.log("Route wechseln");
		}
	}
	if(rednext==true){
		ball.x -=8;
		ball.y +=30;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x<785 && ball.y>245){
			running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
		}
	}
	
  
  
}
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=8";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});



container.draw();
ball.draw();
',
9=>'
var c= document.getElementById("mycanvas9");

var ctx=c.getContext("2d");
var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext = false;
var container = {
  draw: function(){
	   '.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas9.width,mycanvas9.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  
  
 
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  if(red == true){ 
	if(redSwitch == false){
		ball.x += 4.7;
		ball.y += 3;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 255 && ball.y > 308){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	if(ball.x > 783 && ball.y < 250){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
	if(redSwitch == true){
		ball.y -= 4.8;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 375 && ball.y < 169){
			redSwitch = false;
		}
		
	}
	if(redSwitchnext==true){
		ball.y -= 0.01;
		ball.x += 13.6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y < 305){
			redSwitchnext = false;
		}
	}
  }
  
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=9";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});

container.draw();
ball.draw();
',
10=>'

var c= document.getElementById("mycanvas10");

var ctx=c.getContext("2d");
var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext = false;
var container = {
  draw: function(){
	  '.$stack[$map].'
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas10.width,mycanvas10.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  
  
 
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  if(red == true){ 
	if(redSwitch == false){
		ball.x += 4.7;
		ball.y += 3;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 255 && ball.y > 308){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	if(ball.x > 783 && ball.y < 250){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
	if(redSwitch == true){
		ball.y -= 4.8;
		ball.x += 4.5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 375 && ball.y < 169){
			redSwitch = false;
		}
		
	}
	if(redSwitchnext==true){
		ball.y -= 0.01;
		ball.x += 13.6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y < 305){
			redSwitchnext = false;
		}
	}
  }
  
  
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=9";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	
});

container.draw();
ball.draw();
',
11=>'
var c= document.getElementById("mycanvas11");
var ctx=c.getContext("2d");

var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext = false;
var container = {
  draw: function(){
	  '.$stack[$map].'
  }
};

var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};

function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas11.width,mycanvas11.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  if(red == true){ 
	if(redSwitch == false){
		ball.x += 4;
		ball.y += 1;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 420 && ball.y > 306){ 
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(redSwitch == true){
		ball.y -= 0.95;
		ball.x += 4.6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		
		if(ball.x > 790 && ball.y < 238){
			red = false;
			redSwitch = false;
			running = false;
			window.cancelAnimationFrame(raf);
			console.log("Ende");
		}		
	}
  } 
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=11";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
});
container.draw();
ball.draw();
',
12=>'
var c= document.getElementById("mycanvas12");
var ctx=c.getContext("2d");

var raf;
var running = false;
var blue = false;

var container={
	draw:function() {
		'.$stack[$map].'
}};

var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas12.width,mycanvas12.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();

raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
  }
}
  

$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});

$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=12";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
});
container.draw();
ball.draw(); 
',
13=>'
var c= document.getElementById("mycanvas13");
	var ctx=c.getContext("2d");
	
	var raf;
	var running = false;
	var red = false;
	var blue = false;
	var redSwitch = false;
	var redSwitchnext = false;

	var container = {
		draw:function() {
			'.$stack[$map].'
	}};
	
	var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: "black",
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas13.width,mycanvas13.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 790){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
  if(red == true){ 
	if(redSwitch == false){
		ball.x += 4;
		ball.y += 1;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 420 && ball.y > 306){ 
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(redSwitch == true){
		ball.y -= 0.95;
		ball.x += 4.6;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		
		if(ball.x > 790 && ball.y < 238){
			red = false;
			redSwitch = false;
			running = false;
			window.cancelAnimationFrame(raf);
			console.log("Ende");
		}		
	}
  }
}
  
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on("click", function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=13";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
});
container.draw();
ball.draw();
',
14=>'
var c = document.getElementById("mycanvas14");
	var ctx = c.getContext("2d");
	
	var raf;
	var blue = false;
	var blueswitch = false;
	var running = false;
	
	var container = {
		draw: function() {
			'.$stack[$map].'
	}};
	
	var ball = { //alle anfangskoordinaten und eigenschaften
	x: 183,
	y: 350,
	vx: 5,
	vy: 1,
	radius: 10,
	color: "black",
	draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};

function clear() { //löschen 
  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.fillRect(0,0,mycanvas14.width,mycanvas14.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  raf = window.requestAnimationFrame(draw);
  
  if(blue == true){ 
	if(blueswitch == false){
		if(ball.x >= 650 && ball.y >= 100){
			ball.x += 1.27;
			ball.y += 1.428;
		}
		else{
			ball.x += 3.1;
			ball.y += 2.14;
			console.log("koordinate x = " + ball.x + "koordinate y = " + ball.y);
		}
	}
	if(ball.x > 400 && ball.y > 500){
		blueswitch = true;
		console.log("Route wechseln");
	}
	if (blueswitch == true){
		ball.x += 3.57;
		ball.y -= 5.71;
		console.log("koordinate x = " + ball.x + "koordinate y = " + ball.y);
		if(ball.x > 650 && ball.y < 100) blueswitch = false;
		
	}
	if (ball.x > 750 && ball.y > 200){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
  }
}
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});

$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=14";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
});
container.draw();
ball.draw();
',
15=>'
var c = document.getElementById("mycanvas15");
	var ctx = c.getContext("2d");

	//Variabeln
	var raf;
	var running = false;
	var blue = false;
	var blueSlow = false;
	
	var container = {
		draw: function() {
		'.$stack[$map].'
	}};
	
	var ball = { //alle anfangskoordinaten und eigenschaften
		x: 113,
		y: 238,
		vx: 5,
		vy: 1,
		radius: 10,
		color: "black",
		draw: function() {
			ctx.beginPath();
			ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
			ctx.closePath();
			ctx.fillStyle = this.color;
			ctx.fill();
		}
	};

	function clear() { //löschen 
		ctx.fillStyle = "rgba(255, 255, 255, 1)";
		ctx.fillRect(0,0,mycanvas15.width,mycanvas15.height); // da ist ein fehler
	}
	
	function draw() { //animieren
		clear();
		container.draw();
		ball.draw();
		
		raf = window.requestAnimationFrame(draw);
  
		if(blue == true){ 
			ball.x += 5;
		}
		if (ball.x >= 695) blue = false;
		
		if (blue == false){
			ball.x += 2.5;
		}
		if(ball.x >= 770){
			running = false;
			window.cancelAnimationFrame(raf);
			console.log("Ende");
		}
	}
	
	$("#blue").on("click", function(e) {
		if(!running){
			raf = window.requestAnimationFrame(draw);
			running = true;
			blue = true;
		}
	});
	
	$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=15";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
	});
	container.draw();
	ball.draw();
',
16=>'
var c = document.getElementById("mycanvas16");
	var ctx = c.getContext("2d");
	
	//Variabeln
	var raf;
	var running = false;
	var blue = false;

	var container = {
		draw: function() {
	'.$stack[$map].'
	}};
	
	var ball = { //alle anfangskoordinaten und eigenschaften
		x: 113,
		y: 238,
		vx: 5,
		vy: 1,
		radius: 10,
		color: "black",
		draw: function() {
			ctx.beginPath();
			ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
			ctx.closePath();
			ctx.fillStyle = this.color;
			ctx.fill();
		}
	};
	function clear() { //löschen 
		ctx.fillStyle = "rgba(255, 255, 255, 1)";
		ctx.fillRect(0,0,mycanvas16.width,mycanvas16.height); // da ist ein fehler
	}
	function draw() { //animieren
		clear();
		ball.draw();
		container.draw();
  
		raf = window.requestAnimationFrame(draw);
  
		if(blue == true){ 
	ball.x += 5;
	console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	if(ball.x > 770){ 
		running = false;
		window.cancelAnimationFrame(raf);
		
		console.log("Ende");
	}
  }
}
  
$( "#blue" ).on("click", function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});



$( "#reset" ).on("click", function(e) { //reset
	e.preventDefault();
	var address = "response.php?seite=maps&maps=16";
$.ajax({
		type: "GET",
		url: address, 
		dataType: "html",
		success: function(msg) {
			$(".container").fadeOut(800, function(){ // bei erfolg

				$(".container").html(msg).fadeIn().delay(1200);
			});
		}
});
});
container.draw();
ball.draw();
'
);

return $javaContentArray[$map];
}
function getZeichnung($id){
    $link = OpenDB();
	try {
    $query = 'SELECT z_d, pos_x, pos_y, objekt, farbe, titel, special_object FROM golfbahn, zeichnung WHERE golfbahn_id=:id AND zeichnung.g_id = golfbahn.golfbahn_id';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
	
    $row = $statement->fetchAll();
	}
    catch (PDOException $e) {
		p($e);
    }
    CloseDB($link);

    return $row;
}
function getGolfText($id){
	$link = OpenDB();
	 try{
		  $query ="SELECT text FROM golfbahn WHERE golfbahn_id=:id";
		  $statement = $link->prepare($query);
		  $statement->bindValue(':id', $id);
		  $statement->execute();
		  $row = $statement->fetchColumn();
	 }
	 catch (PDOException $e) {
		p($e);
    }
    CloseDB($link);
    return $row;
}
function getCoordinates($id){
	$link = OpenDB();
	try {
    $query = 'SELECT x_koordinate, y_koordinate, extras FROM koordinaten, zeichnung WHERE zeichnung.z_d = koordinaten.zeichnung_id AND zeichnung_id=:id';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
	
    $row = $statement->fetchAll();
	}
    catch (PDOException $e) {
		p($e);
    }
    CloseDB($link);

    return $row;
}
function createPos($map){
	$ConString = '';
	global $editor;
	$editor .= '<form id="delete">';
	$Zeichnung = getZeichnung($map); // zeichnung array
	$i = 5;
	foreach($Zeichnung as $keys){
		if(!$keys['special_object'] == 1){
			$Koordinaten = getCoordinates($keys['z_d']); //koordinaten array
			$ConString .= GO."beginPath();";
			if(!empty($keys['pos_x']) && !empty($keys['pos_y'])){
				$editor .= '<input type="submit" class="editing" name="deleter" style="position:absolute;top:'. ($i+$keys['pos_x']*2.9) .'px;left:'. ($i+$keys['pos_y']/2) .'px" id="'.$keys['z_d'].'" value="'.$keys['titel'].'">';
				$ConString .= GO."moveTo(".$keys['pos_x'].",".$keys['pos_y'].");";
			}
			elseif(!empty($keys['objekt'])){
				$ConString .= GO.$keys['objekt'];
			}

			foreach($Koordinaten as $key){
				if(!empty($key['x_koordinate']) && !empty($key['y_koordinate'])){
					$ConString .= GO.'lineTo('.$key['x_koordinate'].','.$key['y_koordinate'].');';
				}
				elseif(!empty($key['extras'])){
					$ConString .= GO.$key['extras'];
				}
			}
			if(!empty($keys['farbe'])){
				$ConString .= GO.'strokeStyle="'.$keys['farbe'].'";';
			}
			$ConString .= GO."stroke();";
		} else{
			$editor .= '<input type="submit" class="editing" name="deleter" style="position:absolute;top:20px;left:20px" id="'.$keys['z_d'].'" value="'.$keys['titel'].'">';
			$ConString .= $keys['objekt'];
		}
		$i*=2;
	}
	$editor .= '</form>';
	
	return $ConString;
}
/* AB HIER KOMMT DER EDITOR*/

function editKoordinaten($update, $zid){ // zu der startposition zugehörige koordinaten einfügen
	try {
		$link = OpenDB();
		$query = "INSERT INTO koordinaten(x_koordinate, y_koordinate, extras, zeichnung_id VALUES(:x, :y, IF(:extras = '', extras, :extras), :zid)";
		$statement = $link->prepare($query);
		$statement->bindValue(':x', filter_var($update['x'], FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->bindValue(':y', filter_var($update['y'], FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->bindValue(':extras', filter_var($update['extras'], FILTER_SANITIZE_STRING), PDO::PARAM_STR);
		$statement->bindValue(':zid', filter_var($zid, FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->execute();
	}
	catch (PDOException $e) {
            p($e);
        }
    CloseDB($link);
}
function editText($golfid,$text){
	try{
		$link = OpenDB();
		$query="UPDATE golfbahn SET text=:text WHERE golfbahn_id=:golfid";
		$statement = $link->prepare($query);
		$statement->bindValue(':text',$text);
		$statement->bindValue(':golfid',$golfid);
		$statement->execute();
	}
		catch (PDOException $e) {
            p($e);
        }
    CloseDB($link);
	}


function editZeichnung($update){ //start position einfügen
	try {
		$link = OpenDB();
		$query = "INSERT INTO zeichnung(pos_x, pos_y, objekt, farbe, titel, g_id VALUES(:x, :y, IF(:objekt = '', objekt, :objekt), :farbe, :titel, :g_id) ";
		$statement = $link->prepare($query);
		$statement->bindValue(':x', filter_var($update['x'], FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->bindValue(':y', filter_var($update['y'], FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->bindValue(':objekt', filter_var($update['objekt'], FILTER_SANITIZE_STRING), PDO::PARAM_STR);
		$statement->bindValue(':farbe', filter_var($update['farbe'], FILTER_SANITIZE_STRING), PDO::PARAM_STR);
		$statement->bindValue(':titel', filter_var($update['titel'], FILTER_SANITIZE_STRING), PDO::PARAM_STR);
		$statement->bindValue(':gid', filter_var($update['g_id'], FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->execute();
	}
	catch (PDOException $e) {
            p($e);
        }
    CloseDB($link);
	$lastInserted = getLastID();
	return $lastInserted;
}
function SETxy($POSTDATA){
	$getID = editZeichnung($POSTDATA);
	editKoordinaten($POSTDATA, $getID);
}
function getLastID(){
	$link = OpenDB();
	try {
    $query = 'SELECT LAST_INSERT_ID();';
    $statement = $link->prepare($query);
    $statement->execute();
    $row = $statement->fetchColumn();
	}
    catch (PDOException $e) {
		p($e);
    }
    CloseDB($link);
    return $row;
}
function removeLine($var){
	try {
		$link = OpenDB();
		$query = "DELETE from zeichnung WHERE z_d=:zid";
		$statement = $link->prepare($query);
		$statement->bindValue(':zid', filter_var($var, FILTER_SANITIZE_NUMBER_INT), PDO::PARAM_INT);
		$statement->execute();
	}
	catch (PDOException $e) {
            p($e);
        }
    CloseDB($link);
}
