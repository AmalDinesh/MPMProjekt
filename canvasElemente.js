/*		
CANVAS ELEMENTE
LISTE:
1.          #kurze Beschreibung
2.			#...
3.
4.
5.
6.
7.
8.
9.

*/

//CANVAS1
function canvas1(){
	var c= document.getElementById("mycanvas");
	var ctx=c.getContext("2d");
	//document.getElementById("blue1").onclick = animateBlue;
	//document.getElementById("red1").onclick = animateRed;

var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitchnext = false;
var container = {
  draw: function(){
	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(770,235);
	ctx.strokeStyle="blue";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(270,305);
	ctx.lineTo(400,170);
	ctx.lineTo(600,305);
	ctx.lineTo(770,235);
	ctx.strokeStyle="red";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50,170);
	ctx.lineTo(650,170);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	ctx.stroke();

	ctx. beginPath();
	ctx.moveTo(50, 306);
	ctx.lineTo(650, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50, 170);
	ctx.lineTo(50, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(113,238,10,0*Math.PI,2*Math.PI);
	ctx.fillStyle = 'white';
	ctx.fill();

	// Start
	ctx.beginPath();
	ctx.moveTo(50,200);
	ctx.lineTo(150,200);
	ctx.lineTo(150,270);
	ctx.lineTo(50,270);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(790,238,20,0*Math.PI,2*Math.PI);
	ctx.strokeStyle='#3AAD55';
	ctx.fillStyle='#3AAD55';
	ctx.stroke();
  }
};
var ball = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = 'rgba(255, 255, 255, 1)';
  ctx.fillRect(0,0,mycanvas.width,mycanvas.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball.draw();
  container.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
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
		ball.x += 5;
		ball.y += 2.8;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
	}
	if(ball.x > 255 && ball.y > 308){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 645 && ball.y < 270){
			redSwitchnext = true;
		}
	if(ball.x > 790 && ball.y < 230){
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
		ball.y -= 0.05;
		ball.x += 7;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 600 && ball.y < 305){
			redSwitchnext = false;
		}
	}
  }
  
}
$( "#blue" ).on('click', function(e) { //blue
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	blue = true;
  }
});
$( "#red" ).on('click', function(e) { //red
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
	red = true;
  }
});
$( "#reset" ).on('click', function(e) { //reset
		raf = window.requestAnimationFrame(draw);
		running = true;
		ball.x = 120;
		ball.y = 235;
		clear();
		ball.draw();
		container.draw();
		
    window.cancelAnimationFrame(raf);
	running = false;
	console.log("resettet");
	
});

container.draw();
ball.draw();
}

//BAHNWINKEL
function canvas6(){
	//Variabeln
	var canvas = document.getElementById('mycanvas6');
	var c = canvas.getContext("2d");
   
 var raf6;
var running6 = false;
var red6 = false;
var blue6 = false;
var redSwitch6 = false;
var redSwitchnext6=false;
var rednext6=false;
var finalred6=false;
var final6=false;
var container6 = {
  draw: function(){
	  
	c.beginPath();
	c.moveTo(330,480);
	c.lineTo(250,350);
	c.lineTo(290,235);
	c.lineTo(420,170);
	c.lineTo(911,320);
	c.lineTo(800,245);
	c.strokeStyle='red';
	c.stroke();
	
	  //Zeichnen
	c.beginPath();
	c.moveTo(250,170);
	c.lineTo(650,170);
	c.strokeStyle='black';
	c.stroke();

	c.beginPath();
	c.moveTo(250, 170);
	c.lineTo(250, 600);
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(400, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(400, 306);
	c.lineTo(400, 600);
	c.stroke();

	c.beginPath();
	c.moveTo(250, 600);
	c.lineTo(400, 600);
	c.stroke();

	c.beginPath();
	c.moveTo(250, 275);
	c.lineTo(350, 170);
	c.stroke();

	c.beginPath();
	c.arc(790, 238, 20, 0*Math.PI, 2*Math.PI, false);
	//c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();
	
	
  }
};
var ball6 = { //alle anfangskoordinaten und eigenschaften
  x: 330,
  y: 480,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
   c.beginPath();
		c.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		c.closePath();
		c.fillStyle=this.color;
		c.fill();
  }
};
function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas6.width,mycanvas6.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball6.draw();
  container6.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf6 = window.requestAnimationFrame(draw);
  
if(red6 == true){ 
	if(redSwitch6 == false){
		ball6.x -=3 ;
		ball6.y -= 5;
		console.log("koordinate x = "+ball6.x+" koordinate y = "+ball6.y);
	}
	if(ball6.x<250 && ball6.y<350){
		redSwitch6=true;
		console.log("Route wechseln");
	}
	if(redSwitch6==true){
		ball6.x +=2;
		ball6.y -=6;
		console.log("koordinate x = "+ball6.x+" koordinate y = "+ball6.y);
		if(ball6.x>290 && ball6.y<235){
			redSwitchnext6=true;
			console.log("Route wechseln");
		}
	}
	if(redSwitchnext6==true){
		ball6.x +=10;
		ball6.y -=0.5;
		console.log("koordinate x = "+ball6.x+" koordinate y = "+ball6.y);
		if(ball6.x>420 && ball6.y<170){
			finalred6=true;
			console.log("Route wechseln");
		}
	}
	if(finalred6==true){
		ball6.x +=10;
		ball6.y +=15;
		console.log("koordinate x = "+ball6.x+" koordinate y = "+ball6.y);
		if(ball6.x>911 && ball6.y>320){
			final6=true;
			console.log("Route wechseln");
		}
	}
	if(final6==true){
		ball6.x -=55;
		ball6.y -=45;
		console.log("koordinate x = "+ball6.x+" koordinate y = "+ball6.y);
		if(ball6.x<785 && ball6.y<250){
			running6 = false;
		window.cancelAnimationFrame(raf6);
		console.log("Ende");
		}
	}
	
	
	
	
	
  }
  

}
$( "#blue6" ).on('click', function(e4) { //blue
  if (!running6) {
    raf6 = window.requestAnimationFrame(draw);
    running6 = true;
	blue6 = true;
  }
});
$( "#red6" ).on('click', function(e4) { //red
  if (!running6) {
    raf6 = window.requestAnimationFrame(draw);
    running6 = true;
	red6 = true;
  }
});
$( "#reset6" ).on('click', function(e4) { //reset
		raf6 = window.requestAnimationFrame(draw);
		running6 = true;
		ball6.x = 120;
		ball6.y = 235;
		clear();
		ball6.draw();
		container6.draw();
		
    window.cancelAnimationFrame(raf6);
	running6 = false;
	console.log("resettet");
	
});

container6.draw();
ball6.draw();



}
//CANVASSTÄBE
function canvas4(){
	var canvas = document.getElementById('mycanvas4');
	var c = canvas.getContext("2d");
   
 var raf4;
var running4 = false;
var red4 = false;
var blue4 = false;
var redSwitch4 = false;
var redSwitchnext4=false;
var rednext4=false;
var vorschlag4={
	draw:function(){
		
	c.beginPath();
	c.moveTo(120,235);
	c.lineTo(300,305);
	c.lineTo(380,170);
	c.lineTo(550,305);
	c.lineTo(780,235);
	c.strokeStyle='red';
	c.stroke();
	}
};
var container4 = {
  draw: function(){
	  
	
	
	  
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.strokeStyle='black';
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	

	//Loch
	c.beginPath();
	c.arc(790, 238, 20, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();

	//Hindernisse
	c.beginPath();
	c.rect(250, 170, 20, 70);
	c.fillStyle = "yellow";
	c.fill();
	c.lineWidth = 1;
	c.strokeStyle = "black";
	c.stroke();

	//2
	c.beginPath();
	c.rect(400, 236, 20, 70);
	c.fillStyle = "blue";
	c.fill();
	c.lineWidth = 1;
	c.strokeStyle = "black";
	c.stroke();

	//3
	c.beginPath();
	c.rect(550, 170, 20, 70);
	c.fillStyle = "red";
	c.fill();
	c.lineWidth = 1;
	c.strokeStyle = "black";
	
  }
};
var ball4 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
   c.beginPath();
		c.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		c.closePath();
		c.fillStyle=this.color;
		c.fill();
  }
};
function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas4.width,mycanvas4.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball4.draw();
  container4.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf4 = window.requestAnimationFrame(draw);
  
if(red4 == true){ 
	if(redSwitch4 == false){
		ball4.x += 5;
		ball4.y += 2.8;
		console.log("koordinate x = "+ball4.x+" koordinate y = "+ball4.y);
	}
	if(ball4.x > 255 && ball4.y > 308){ //x 255 ,, y 310
		redSwitch4 = true;
		console.log("Route wechseln");
	}
	if(ball4.x > 645 && ball4.y < 270){
			redSwitchnext4 = true;
		}
	if(ball4.x > 790 && ball4.y < 230){
		running4 = false;
		window.cancelAnimationFrame(raf4);
		console.log("Ende");
	}
	if(redSwitch4 == true){
		ball4.y -= 4.8;
		ball4.x += 4.5;
		console.log("koordinate x = "+ball4.x+" koordinate y = "+ball4.y);
		if(ball4.x > 375 && ball4.y < 169){
			redSwitch4 = false;
		}
		
	}
	if(redSwitchnext4==true){
		ball4.y -= 0.05;
		ball4.x += 7;
		console.log("koordinate x = "+ball4.x+" koordinate y = "+ball4.y);
		if(ball4.x > 600 && ball4.y < 305){
			redSwitchnext4 = false;
		}
	}
  }
  

}
$( "#blue4" ).on('click', function(e4) { //blue
  if (!running4) {
    raf4 = window.requestAnimationFrame(draw);
    running4 = true;
	blue4 = true;
  }
});
$( "#red4" ).on('click', function(e4) { //red
  if (!running4) {
    raf4 = window.requestAnimationFrame(draw);
    running4 = true;
	red4 = true;
  }
});
$( "#reset4" ).on('click', function(e4) { //reset
		raf4 = window.requestAnimationFrame(draw);
		running4 = true;
		ball4.x = 120;
		ball4.y = 235;
		clear();
		ball4.draw();
		container4.draw();
		
    window.cancelAnimationFrame(raf4);
	running4 = false;
	console.log("resettet");
	
});

container4.draw();
ball4.draw();
vorschlag4.draw();



}
//CANVAS2
function canvas2(){
	//Canvas/Contextvarabeln
	var canvas = document.getElementById('mycanvas2');
	var c = canvas.getContext("2d");

var raf2;
var running2 = false;
var red2 = false;
var blue2 = false;
var redSwitch2 = false;
var redSwitchnext2 = false;
var rednext2=false;
var container2 = {
  draw: function(){
	 //Canvas für Map2
	 
	c.beginPath();
	c.moveTo(120,235);
	c.lineTo(400,305);
	c.lineTo(600,170);
	c.lineTo(775,235);
	c.strokeStyle='red';
	c.stroke();
	
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.strokeStyle='black';
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	
    
	c.beginPath();
	c.arc(790,238,20,0*Math.PI,2*Math.PI);
	c.strokeStyle='#3AAD55';
	c.fillStyle='#3AAD55';
	c.stroke();
	
	c.beginPath();
	c.moveTo(400,180);
	c.lineTo(450,220);
	c.lineTo(400,250);
	c.lineTo(350,200);
	c.lineTo(400,180);
	c.strokeStyle='yellow';
	c.stroke();
	
	c.beginPath();
	c.moveTo(600,300);
	c.lineTo(630,250);
	c.lineTo(580,230);
	c.lineTo(550,280);
	c.lineTo(600,300);
	c.strokeStyle='green';
	c.stroke();
  }
};
var ball2 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    c.closePath();
    c.fillStyle = this.color;
    c.fill();
  }
};
function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas2.width,mycanvas2.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball2.draw();
  container2.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf2 = window.requestAnimationFrame(draw);
  
  
  if(red2 == true){ 
	if(redSwitch2 == false){
		ball2.x += 8;
		ball2.y += 2;
		console.log("koordinate x = "+ball2.x+" koordinate y = "+ball2.y);
	}
	if(ball2.x>400 && ball2.y>305){
		redSwitchnext2=true;
		console.log("Route wechseln");
	}
	if(redSwitchnext2==true){
		ball2.x +=4;
		ball2.y -=10;
		console.log("koordinate x = "+ball2.x+" koordinate y = "+ball2.y);
		if(ball2.x>600 && ball2.y<170){
			rednext2=true;
			console.log("Route wechseln");
		}
		if(rednext2==true){
			ball2.x +=4;
			ball2.y +=13;
			console.log("koordinate x = "+ball2.x+" koordinate y = "+ball2.y);
			if(ball2.x>790 && ball2.y>235){
				running2 = false;
		window.cancelAnimationFrame(raf2);
		console.log("Ende");
			}
		}
	}
	
  }
  
}
$( "#blue2" ).on('click', function(e) { //blue
  if (!running2) {
    raf2 = window.requestAnimationFrame(draw);
    running2 = true;
	blue2 = true;
  }
});
$( "#red2" ).on('click', function(e) { //red
  if (!running2) {
    raf2 = window.requestAnimationFrame(draw);
    running2 = true;
	red2 = true;
  }
});
$( "#reset2" ).on('click', function(e) { //reset
		raf2 = window.requestAnimationFrame(draw);
		running2 = true;
		ball2.x = 120;
		ball2.y = 235;
		clear();
		ball2.draw();
		container2.draw();
		
    window.cancelAnimationFrame(raf2);
	running2 = false;
	console.log("resettet");
	
});

container2.draw();
ball2.draw();
}
//CANVAS3
function canvas3(){
	var c= document.getElementById("mycanvas3");
	var cty=c.getContext("2d");
	//document.getElementById("blue1").onclick = animateBlue;
	//document.getElementById("red1").onclick = animateRed;

var raf3;
var running3 = false;
var red3 = false;
var blue3 = false;
var redSwitch3 = false;
var redSwitchnext3=false;
var container3 = {
  draw: function(){
	cty.beginPath();
	cty.rect(80, 80, 820, 300);
	cty.strokeStyle="black";
	cty.stroke();

	cty.beginPath();
	cty.arc(783, 220, 50, 1.1*Math.PI, 0.85*Math.PI);
	cty.strokeStyle="black";
	cty.stroke();

	cty. beginPath();
	cty.moveTo(737, 204);
	cty.lineTo(700, 204);
	cty.stroke();

	cty.beginPath();
	cty.moveTo(738,243);
	cty.lineTo(700,243);
	cty.stroke();

	cty.beginPath();
	cty.arc(785,220,15,0*Math.PI,2*Math.PI);
	cty.strokeStyle='#3AAD55';
	cty.fillStyle='#3AAD55';
	cty.stroke();
  

	
	
	cty.beginPath();
	cty.moveTo(120,220);
	cty.lineTo(780,220);
	cty.strokeStyle='blue';
	cty.stroke();
	
	cty.beginPath();
	cty.moveTo(120,220);
	cty.lineTo(350,380);
	cty.lineTo(710,205);
	cty.lineTo(780,220);
	cty.strokeStyle='red';
	cty.stroke();
  }
};
var ball3 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 220,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
   cty.beginPath();
		cty.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		cty.closePath();
		cty.fillStyle=this.color;
		cty.fill();
  }
};
function clear() { //löschen 
  cty.fillStyle = 'rgba(255, 255, 255, 1)';
  cty.fillRect(0,0,mycanvas3.width,mycanvas3.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball3.draw();
  container3.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf3 = window.requestAnimationFrame(draw);
  
  if(blue3 == true){ 
	ball3.x += 5;
	console.log("koordinate x = "+ball3.x+" koordinate y = "+ball3.y);
	if(ball3.x > 785){ 
		running3 = false;
		window.cancelAnimationFrame(raf3);
		
		console.log("Ende");
	}
  }
  
   if(red3 == true){ 
	if(redSwitch3 == false){
		ball3.x += 5;
		ball3.y += 3.5;
		console.log("koordinate x = "+ball3.x+" koordinate y = "+ball3.y);
	}
	if(ball3.x > 350 && ball3.y > 380){ //x 255 ,, y 310
		redSwitch3 = true;
		console.log("Route wechseln");
	}
	if(ball3.x>350 && ball3.y>380){
		redSwitchnext3=true;
		console.log("Route wechseln");
	}
	
	if(redSwitch3 == true){
		ball3.y -= 6;
		ball3.x += 4.5;
		console.log("koordinate x = "+ball3.x+" koordinate y = "+ball3.y);
		if(ball3.x >710 && ball3.y <205){
			redSwitch3 = false;
			redSwitchnext3=true;
		}
		
	}
	if(redSwitchnext3==true){
		ball3.y+=0.5;
		ball3.x+=7;
		console.log("koordinate x = "+ball3.x+" koordinate y = "+ball3.y);
		if(ball3.x>780 && ball3.y>220){
			running3=false;
			window.cancelAnimationFrame(raf3);
			console.log("Ende");
		}
	}

 
}
}
$( "#blue3" ).on('click', function(e3) { //blue
  if (!running3) {
    raf3 = window.requestAnimationFrame(draw);
    running3 = true;
	blue3 = true;
  }
});
$( "#red3" ).on('click', function(e3) { //red
  if (!running3) {
    raf3 = window.requestAnimationFrame(draw);
    running3 = true;
	red3 = true;
  }
});
$( "#reset3" ).on('click', function(e3) { //reset
		raf3 = window.requestAnimationFrame(draw);
		running3 = true;
		ball3.x = 120;
		ball3.y = 235;
		clear();
		ball3.draw();
		container3.draw();
		
    window.cancelAnimationFrame(raf3);
	running3 = false;
	console.log("resettet");
	
});
mycanvas3.addEventListener('mouseout', function(e3) { //wenn kursor draussen ist, terminiert sich das programm
  window.cancelAnimationFrame(raf3);
  running3 = false;
});

container3.draw();
ball3.draw();
}



//MITTELHÜGEL
function canvas7(){
	var canvas = document.getElementById('mycanvas7');
	var c = canvas.getContext("2d");
   
  var raf7;
var running7 = false;
var red7 = false;
var blue7 = false;
var redSwitch7 = false;
var redSwitchnext7=false;
var container7 = {
  draw: function(){
	  
	  c.beginPath();
	  c.beginPath();
	  c.moveTo(120,220);
	  c.lineTo(850,220);
	  c.strokeStyle='blue';
	  c.stroke();
	//Bahn
	c.beginPath();
	c.moveTo(80, 150);
	c.rect(80, 150, 315, 140);
	c.strokeStyle = "black";
	c.stroke();

	c.beginPath();
	c.moveTo(615, 150);
	c.rect(615, 150, 315, 140);
	c.strokeStyle = "black";
	c.stroke();

	//Bogen
	c.beginPath();
	c.arc(505, 205, 123, 1.15*Math.PI, 1.85*Math.PI);
	c.stroke();

	c.beginPath();
	c.arc(505, 235, 123, 0.85*Math.PI, 0.15*Math.PI, true);
	c.stroke();

	//Loch
	c.beginPath();
	c.arc(850, 220, 20, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();

	//Start
	c.beginPath();
	c.moveTo(80,175);
	c.lineTo(150,175);
	c.lineTo(150,265);
	c.lineTo(80,265);
	c.strokeStyle="black";
	c.stroke();
  }
};
var ball7 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 220,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
   c.beginPath();
		c.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		c.closePath();
		c.fillStyle=this.color;
		c.fill();
  }
};
function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas7.width,mycanvas7.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball7.draw();
  container7.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf7 = window.requestAnimationFrame(draw);
  
  if(blue7 == true){ 
	ball7.x += 5;
	console.log("koordinate x = "+ball7.x+" koordinate y = "+ball7.y);
	if(ball7.x > 850){ 
		running7 = false;
		window.cancelAnimationFrame(raf7);
		
		console.log("Ende");
	}
  }
  
  
}
$( "#blue7" ).on('click', function(e3) { //blue
  if (!running7) {
    raf7 = window.requestAnimationFrame(draw);
    running7 = true;
	blue7 = true;
  }
});

$( "#reset7" ).on('click', function(e3) { //reset
		raf7 = window.requestAnimationFrame(draw);
		running7 = true;
		ball7.x = 120;
		ball7.y = 235;
		clear();
		ball7.draw();
		container7.draw();
		
    window.cancelAnimationFrame(raf7);
	running7 = false;
	console.log("resettet");
	
});


container7.draw();
ball7.draw();
	
}
//VHinderniss
function canvas8(){
	var canvas = document.getElementById('mycanvas8');
	var c = canvas.getContext("2d");
 var raf8;
var running8 = false;
var red8 = false;
var blue8 = false;
var redSwitch8 = false;
var redSwitchnext8=false;
var rednext8=false;
var blueSwitch8=false;
var blueSwitchnext8=false;
var bluenext8=false;
var container8 = {
  draw: function(){
	  
	  c.beginPath();
	  c.moveTo(113,238);
	  c.lineTo(600,173);
	  c.lineTo(920,180);
	  c.lineTo(810,265);
	  c.lineTo(770,240);
	  c.strokeStyle='blue';
	  c.stroke();
	  
	  c.beginPath();
	  c.moveTo(113,238);
	  c.lineTo(600,302);
	  c.lineTo(923,288);
	  c.lineTo(810,215);
	  c.lineTo(770,240);
	  c.strokeStyle='red';
	  c.stroke();
	  //Bahn
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.strokeStyle='black';
	c.stroke();

	c.beginPath();
	c.moveTo(150, 170);
	c.lineTo(150, 306);
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	

	//Loch
	c.beginPath();
	c.arc(770, 238, 15, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();

	//V-Hinderniss
	c.beginPath();
	c.moveTo(770, 220);
	c.lineTo(820, 210);
	c.lineTo(800, 190);
	c.lineTo(770, 220)
	c.strokeStyle='black';
	c.stroke();

	c.beginPath();
	c.moveTo(770, 250);
	c.lineTo(820, 270);
	c.lineTo(800, 285);
	c.lineTo(770, 250)
	c.stroke();

	c.beginPath();
	c.moveTo(650, 170);
	c.lineTo(650, 306)
	c.stroke();
	
  }
};
var ball8 = { //alle anfangskoordinaten und eigenschaften
  x: 113,
  y: 238,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
   c.beginPath();
		c.arc(this.x,this.y,this.radius,0,Math.PI*2,true);
		c.closePath();
		c.fillStyle=this.color;
		c.fill();
  }
};
function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas8.width,mycanvas8.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball8.draw();
  container8.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf8 = window.requestAnimationFrame(draw);
  
  if(blue8 == true){ 
  if(blueSwitch8==false){
	  
  
	ball8.x +=7;
	ball8.y -=1;
	console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
  }
  if(ball8.x>600 && ball8.y<180){
	  blueSwitch8=true;
  }
  if(blueSwitch8==true){
	  ball8.x +=4.5;
	  ball8.y +=0.1;
	 console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
	 if(ball8.x>920 && ball8.y>120){
		 blueSwitchnext8=true;
	 }
  }
  if(blueSwitchnext8==true){
	  ball8.x -=10;
	  ball8.y +=4;
	  console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
	  if(ball8.x<810 && ball8.y<265){
		  bluenext8=true;
	  }
	  
  }
  if(bluenext8==true){
	  ball8.x -=10;
	  ball8.y -=10;
	  if(ball8.x<760 && ball8.y<240){
		  running8 = false;
		window.cancelAnimationFrame(raf8);
		
		console.log("Ende");
	  }
  }
  }
  if(red8 == true){ 
	if(redSwitch8 == false){
		ball8.x +=7 ;
		ball8.y += 1;
		console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
	}
	
	
	if(ball8.x > 600 && ball8.y > 302){ //x 255 ,, y 310
		redSwitch8 = true;
		console.log("Route wechseln");
	}
	
	
	if(redSwitch8 == true){
		ball8.y -= 0.1;
		ball8.x += 4.5;
		console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
		if(ball8.x>923 && ball8.y>288){
			redSwitchnext8=true;
			console.log("Route wechseln");
		}
		
	}
	if(redSwitchnext8==true){
		ball8.x -=20;
		ball8.y -=14;
		console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
		if(ball8.x<810 && ball8.y<215){
			rednext8=true;
			console.log("Route wechseln");
		}
	}
	if(rednext8==true){
		ball8.x -=8;
		ball8.y +=30;
		console.log("koordinate x = "+ball8.x+" koordinate y = "+ball8.y);
		if(ball8.x<785 && ball8.y>245){
			running8 = false;
		window.cancelAnimationFrame(raf8);
		
		console.log("Ende");
		}
	}
	
  
  
}
}
$( "#blue8" ).on('click', function(e3) { //blue
  if (!running8) {
    raf8 = window.requestAnimationFrame(draw);
    running8 = true;
	blue8 = true;
  }
});
$( "#red8" ).on('click', function(e3) { //red
  if (!running8) {
    raf8 = window.requestAnimationFrame(draw);
    running8 = true;
	red8 = true;
  }
});

$( "#reset8" ).on('click', function(e3) { //reset
		raf8 = window.requestAnimationFrame(draw);
		running8 = true;
		ball8.x = 120;
		ball8.y = 235;
		clear();
		ball8.draw();
		container8.draw();
		
    window.cancelAnimationFrame(raf8);
	running8 = false;
	console.log("resettet");
	
});


container8.draw();
ball8.draw();


}
//VHINDERNIS
function vhindernis(){
	var canvas = document.getElementById("VHinderniss");
	var c = canvas.getContext("2d");

	//Bahn
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.stroke();

	c.beginPath();
	c.moveTo(150, 170);
	c.lineTo(150, 306);
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	c.beginPath();
	c.arc(113,238,10,0*Math.PI,2*Math.PI);
	c.strokeStyle='black';
	c.stroke();

	//Loch
	c.beginPath();
	c.arc(770, 238, 10, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();

	//V-Hinderniss
	c.beginPath();
	c.moveTo(770, 220);
	c.lineTo(820, 200);
	c.lineTo(800, 180);
	c.lineTo(770, 220)
	c.stroke();

	c.beginPath();
	c.moveTo(770, 256);
	c.lineTo(820, 276);
	c.lineTo(800, 296);
	c.lineTo(770, 256)
	c.stroke();

	c.beginPath();
	c.moveTo(650, 170);
	c.lineTo(650, 306)
	c.stroke();
}
//VULKAN
function canvas16(){
	var canvas = document.getElementById('mycanvas16');
	var c = canvas.getContext("2d");

	//Bahn
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.stroke();

	c.beginPath();
	c.moveTo(150, 170);
	c.lineTo(150, 306);
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	c.beginPath();
	c.arc(113,238,10,0*Math.PI,2*Math.PI);
	c.strokeStyle='black';
	c.stroke();

	//Loch
	c.beginPath();
	c.arc(770, 238, 10, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();

	//Vulkan
	c.beginPath();
	c.arc(770, 238, 60, 1.25*Math.PI, 0.75*Math.PI);
	c.stroke();

	c.beginPath();
	c.moveTo(728, 195);
	c.lineTo(765, 230);
	c.stroke();

	c.beginPath();
	c.moveTo(728, 280);
	c.lineTo(765, 246);
	c.stroke();

	c.beginPath();
	c.moveTo(765, 230);
	c.lineTo(650, 230);
	c.stroke();

	c.beginPath();
	c.moveTo(765, 246);
	c.lineTo(650, 246);
	c.stroke();

	c.beginPath();
	c.moveTo(728, 280);
	c.lineTo(650, 246);
	c.stroke();

	c.beginPath();
	c.moveTo(728, 195);
	c.lineTo(650, 230);
	c.stroke();

	c.beginPath();
	c.moveTo(650, 246);
	c.lineTo(600, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(650, 230);
	c.lineTo(600, 170);
	c.stroke();

}
//ZIELHÜGEL
function canvas15(){
	var canvas = document.getElementById('mycanvas15');
	var c = canvas.getContext("2d");

	//Bahn
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
	c.stroke();

	c.beginPath();
	c.moveTo(150, 170);
	c.lineTo(150, 306);
	c.stroke();

	c.beginPath();
	c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 306);
	c.lineTo(650, 306);
	c.stroke();

	c.beginPath();
	c.moveTo(50, 170);
	c.lineTo(50, 306);
	c.stroke();

	c.beginPath();
	c.arc(113,238,10,0*Math.PI,2*Math.PI);
	c.strokeStyle='black';
	c.stroke();



	//Hügel
	c.beginPath();
	c.arc(770, 238, 75, 0*Math.PI, 2*Math.PI);
	c.fillStyle = "#C1B8B8";
	c.fill();

	//Loch
	c.beginPath();
	c.arc(770, 238, 10, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#010000";
	c.fillStyle="#010000";
	c.stroke();
}

//BLITZ
function canvas14(){
	var canvas = document.getElementById('mycanvas14');
	var c = canvas.getContext("2d");

	c.beginPath();
	c.moveTo(50, 300);
	c.lineTo(400, 300);
	c.stroke();

	c.beginPath();
	c.moveTo(400, 300);
	c.lineTo(300, 100);
	c.stroke();

	c.beginPath();
	c.moveTo(300, 100);
	c.lineTo(800, 100);
	c.stroke();

	c.beginPath();
	c.moveTo(800, 100);
	c.lineTo(900, 300);
	c.stroke();

	c.beginPath();
	c.moveTo(900, 300);
	c.lineTo(600, 300);
	c.stroke();

	c.beginPath();
	c.moveTo(600, 300);
	c.lineTo(700, 500);
	c.stroke();

	c.beginPath();
	c.moveTo(700, 500);
	c.lineTo(200, 500);
	c.stroke();

	c.beginPath();
	c.moveTo(200, 500);
	c.lineTo(50, 300);
	c.stroke();

	c.beginPath();
	c.arc(750, 200, 10, 0, 2*Math.PI, false);
	c.stroke();

	c.beginPath();
	c.moveTo(150, 300);
	c.lineTo(300, 500);
	c.stroke();
}
function canvas5(){
	var c5=document.getElementById('mycanvas5');

var ct5=c5.getContext("2d");
var raf5;
var running5 = false;
var red5 = false;
var redSwitch5 = false;
var redSwitchnext5 = false;
var container5 = {
  draw: function(){
	  
	  ct5.beginPath();
	  ct5.moveTo(120,235);
	  ct5.lineTo(400,170);
	  ct5.lineTo(600,305);
	  ct5.lineTo(780,235);
	  ct5.strokeStyle='red';
	  ct5.stroke();
	  
	ct5.beginPath();
ct5.moveTo(50,170);
ct5.lineTo(650,170);
ct5.strokeStyle='black';
ct5.stroke();

ct5.beginPath();
ct5.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
ct5.stroke();

ct5. beginPath();
ct5.moveTo(50, 306);
ct5.lineTo(650, 306);
ct5.stroke();

ct5.beginPath();
ct5.moveTo(50, 170);
ct5.lineTo(50, 306);
ct5.stroke();



ct5.beginPath();
ct5.moveTo(300,307);
ct5.lineTo(330,250);
ct5.lineTo(360,250);
ct5.lineTo(390, 307);
ct5.fillStyle="yellow"
ct5.fill();

ct5.beginPath();
ct5.moveTo(500,170);
ct5.lineTo(530,227);
ct5.lineTo(560,227);
ct5.lineTo(590,170);
ct5.lineTo(500,170);
ct5.fillStyle='yellow';
ct5.fill();

ct5.beginPath();
ct5.arc(790,238,15,0*Math.PI,2*Math.PI);
ct5.strokeStyle='#3AAD55';
ct5.fillStyle='#3AAD55';
ct5.stroke();

// Start

ct5.beginPath();
ct5.moveTo(50,200);
ct5.lineTo(150,200);
ct5.lineTo(150,270);
ct5.lineTo(50,270);
ct5.strokeStyle="black";
ct5.stroke();

  }
};
var ball5 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    ct5.beginPath();
    ct5.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ct5.closePath();
    ct5.fillStyle = this.color;
    ct5.fill();
  }
};
function clear() { //löschen 
  ct5.fillStyle = 'rgba(255, 255, 255, 1)';
  ct5.fillRect(0,0,mycanvas5.width,mycanvas5.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball5.draw();
  container5.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf5 = window.requestAnimationFrame(draw);
  
  
	

  if(red5 == true){ 
	if(redSwitch5 == false){
		ball5.x += 8;
		ball5.y -= 2;
		console.log("koordinate x = "+ball5.x+" koordinate y = "+ball5.y);
	}
	if(ball5.x > 400 && ball5.y <170){ //x 255 ,, y 310
		redSwitch5 = true;
		console.log("Route wechseln");
	}
	if(ball5.x > 645 && ball5.y < 270){
			redSwitchnext5 = true;
		}
	
	if(redSwitch5 == true){
		ball5.y += 3;
		ball5.x += 4.5;
		console.log("koordinate x = "+ball5.x+" koordinate y = "+ball5.y);
		if(ball5.x > 600 && ball5.y >305){
			redSwitchnext5 = true;
		}
	
  }
  if(redSwitchnext5==true){
	  ball5.x +=5;
	  ball5.y -=7;
	  if(ball5.x > 780 && ball5.y <230){
		running5 = false;
		window.cancelAnimationFrame(raf5);
		console.log("Ende");
	}
  }
  
}
}

$( "#red5" ).on('click', function(e5) { //red
  if (!running5) {
    raf5 = window.requestAnimationFrame(draw);
    running5 = true;
	red5 = true;
  }
});
$( "#reset5" ).on('click', function(e) { //reset
		raf5 = window.requestAnimationFrame(draw);
		running5 = true;
		ball5.x = 120;
		ball5.y = 235;
		clear();
		ball5.draw();
		container5.draw();
		
    window.cancelAnimationFrame(raf5);
	running5 = false;
	console.log("resettet");
	
});

container5.draw();
ball5.draw();

}
function canvas9(){
var c= document.getElementById('mycanvas9');

var ctx=c.getContext("2d");
var raf9;
var running9 = false;
var red9 = false;
var blue9 = false;
var redSwitch9 = false;
var redSwitchnext9 = false;
var container9 = {
  draw: function(){
	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(770,235);
	ctx.strokeStyle="blue";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(270,305);
	ctx.lineTo(400,170);
	ctx.lineTo(600,305);
	ctx.lineTo(770,235);
	ctx.strokeStyle="red";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50,170);
	ctx.lineTo(650,170);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	ctx.stroke();

	ctx. beginPath();
	ctx.moveTo(50, 306);
	ctx.lineTo(650, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50, 170);
	ctx.lineTo(50, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(113,238,10,0*Math.PI,2*Math.PI);
	ctx.fillStyle = 'white';
	ctx.fill();

	// Start
	ctx.beginPath();
	ctx.moveTo(50,200);
	ctx.lineTo(150,200);
	ctx.lineTo(150,270);
	ctx.lineTo(50,270);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(790,238,20,0*Math.PI,2*Math.PI);
	ctx.strokeStyle='#3AAD55';
	ctx.fillStyle='#3AAD55';
	ctx.stroke();
  }
};
var ball9 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = 'rgba(255, 255, 255, 1)';
  ctx.fillRect(0,0,mycanvas9.width,mycanvas9.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball9.draw();
  container9.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf9 = window.requestAnimationFrame(draw);
  
  if(blue9 == true){ 
	ball9.x += 5;
	console.log("koordinate x = "+ball9.x+" koordinate y = "+ball9.y);
	if(ball9.x > 790){ 
		running9 = false;
		window.cancelAnimationFrame(raf9);
		
		console.log("Ende");
	}
  }
  if(red9 == true){ 
	if(redSwitch9 == false){
		ball9.x += 5;
		ball9.y += 2.8;
		console.log("koordinate x = "+ball9.x+" koordinate y = "+ball9.y);
	}
	if(ball9.x > 255 && ball9.y > 308){ //x 255 ,, y 310
		redSwitch9 = true;
		console.log("Route wechseln");
	}
	if(ball9.x > 645 && ball9.y < 270){
			redSwitchnext9 = true;
		}
	if(ball9.x > 790 && ball9.y < 230){
		running9 = false;
		window.cancelAnimationFrame(raf9);
		console.log("Ende");
	}
	if(redSwitch9 == true){
		ball9.y -= 4.8;
		ball9.x += 4.5;
		console.log("koordinate x = "+ball9.x+" koordinate y = "+ball9.y);
		if(ball9.x > 375 && ball9.y < 169){
			redSwitch9 = false;
		}
		
	}
	if(redSwitchnext9==true){
		ball9.y -= 0.05;
		ball9.x += 7;
		console.log("koordinate x = "+ball9.x+" koordinate y = "+ball9.y);
		if(ball9.x > 600 && ball9.y < 305){
			redSwitchnext9 = false;
		}
	}
  }
  
}
$( "#blue9" ).on('click', function(e) { //blue
  if (!running9) {
    raf9 = window.requestAnimationFrame(draw);
    running9 = true;
	blue9 = true;
  }
});
$( "#red9" ).on('click', function(e) { //red
  if (!running9) {
    raf9 = window.requestAnimationFrame(draw);
    running9 = true;
	red9 = true;
  }
});
$( "#reset9" ).on('click', function(e) { //reset
		raf9 = window.requestAnimationFrame(draw);
		running9 = true;
		ball9.x = 120;
		ball9.y = 235;
		clear();
		ball9.draw();
		container9.draw();
		
    window.cancelAnimationFrame(raf9);
	running9 = false;
	console.log("resettet");
	
});

container9.draw();
ball9.draw();

}
function canvas10(){
	var c= document.getElementById("mycanvas10");

var ctx=c.getContext("2d");
var raf10;
var running10 = false;
var red10 = false;
var blue10 = false;
var redSwitch10 = false;
var redSwitchnext10 = false;
var container10 = {
  draw: function(){
	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(770,235);
	ctx.strokeStyle="blue";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(129,235);
	ctx.lineTo(270,305);
	ctx.lineTo(400,170);
	ctx.lineTo(600,305);
	ctx.lineTo(770,235);
	ctx.strokeStyle="red";
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50,170);
	ctx.lineTo(650,170);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
	ctx.stroke();

	ctx. beginPath();
	ctx.moveTo(50, 306);
	ctx.lineTo(650, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(50, 170);
	ctx.lineTo(50, 306);
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(113,238,10,0*Math.PI,2*Math.PI);
	ctx.fillStyle = 'white';
	ctx.fill();

	// Start
	ctx.beginPath();
	ctx.moveTo(50,200);
	ctx.lineTo(150,200);
	ctx.lineTo(150,270);
	ctx.lineTo(50,270);
	ctx.strokeStyle="black";
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(790,238,20,0*Math.PI,2*Math.PI);
	ctx.strokeStyle='#3AAD55';
	ctx.fillStyle='#3AAD55';
	ctx.stroke();
  }
};
var ball10 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};
function clear() { //löschen 
  ctx.fillStyle = 'rgba(255, 255, 255, 1)';
  ctx.fillRect(0,0,mycanvas10.width,mycanvas10.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball10.draw();
  container10.draw();
  
  
  
  
 // ball.y += ball.vy;

  /*if (ball.y + ball.vy > mycanvas.height || ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > mycanvas.width || ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }
*/
  raf10 = window.requestAnimationFrame(draw);
  
  if(blue10 == true){ 
	ball10.x += 5;
	console.log("koordinate x = "+ball10.x+" koordinate y = "+ball10.y);
	if(ball10.x > 790){ 
		running10 = false;
		window.cancelAnimationFrame(raf10);
		
		console.log("Ende");
	}
  }
  if(red10 == true){ 
	if(redSwitch10 == false){
		ball10.x += 5;
		ball10.y += 2.8;
		console.log("koordinate x = "+ball10.x+" koordinate y = "+ball10.y);
	}
	if(ball10.x > 255 && ball10.y > 308){ //x 255 ,, y 310
		redSwitch10 = true;
		console.log("Route wechseln");
	}
	if(ball10.x > 645 && ball10.y < 270){
			redSwitchnext10 = true;
		}
	if(ball10.x > 790 && ball10.y < 230){
		running10 = false;
		window.cancelAnimationFrame(raf10);
		console.log("Ende");
	}
	if(redSwitch10 == true){
		ball10.y -= 4.8;
		ball10.x += 4.5;
		console.log("koordinate x = "+ball10.x+" koordinate y = "+ball10.y);
		if(ball10.x > 375 && ball10.y < 169){
			redSwitch10 = false;
		}
		
	}
	if(redSwitchnext10==true){
		ball10.y -= 0.05;
		ball10.x += 7;
		console.log("koordinate x = "+ball10.x+" koordinate y = "+ball10.y);
		if(ball10.x > 600 && ball10.y < 305){
			redSwitchnext10 = false;
		}
	}
  }
  
}
$( "#blue10" ).on('click', function(e) { //blue
  if (!running10) {
    raf10 = window.requestAnimationFrame(draw);
    running10 = true;
	blue10 = true;
  }
});
$( "#red10" ).on('click', function(e) { //red
  if (!running10) {
    raf10 = window.requestAnimationFrame(draw);
    running10 = true;
	red10 = true;
  }
});
$( "#reset10" ).on('click', function(e) { //reset
		raf10 = window.requestAnimationFrame(draw);
		running10 = true;
		ball10.x = 120;
		ball10.y = 235;
		clear();
		ball10.draw();
		container10.draw();
		
    window.cancelAnimationFrame(raf10);
	running10 = false;
	console.log("resettet");
	
});

container10.draw();
ball10.draw();
}
function canvas11(){

var c11= document.getElementById('mycanvas11');
var c=c11.getContext("2d");

var raf11;
var running11 = false;
var red11 = false;
var blue11 = false;
var redSwitch11 = false;
var redSwitchnext11 = false;
var container11 = {
  draw: function(){

  
  c.beginPath();
c.moveTo(123,240);
c.lineTo(770,240);
c.strokeStyle="blue";
c.stroke();
	
c.beginPath();
c.moveTo(123, 240);
c.lineTo(420, 306);
c.lineTo(770, 240);
c.strokeStyle="red";
c.stroke();

c.beginPath();
c.moveTo(50,170);
c.lineTo(650,170);
c.strokeStyle='black';
c.stroke();

c.beginPath();
c.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
c.stroke();

c. beginPath();
c.moveTo(50, 306);
c.lineTo(650, 306);
c.stroke();

c.beginPath();
c.moveTo(50, 170);
c.lineTo(50, 306);
c.stroke();

c.beginPath();
c.moveTo(400,250);
c.lineTo(440,250);
c.stroke();

c.beginPath();
c.arc(410, 250, 30, 0*Math.PI, 0.3*Math.PI);
c.stroke();

c.beginPath();
c.arc(430, 250, 30, 0.7*Math.PI, 1*Math.PI);
c.stroke();

c.beginPath();
c.moveTo(412,274);
c.lineTo(428,274);
c.stroke();

c.beginPath();
c.moveTo(440, 230);
c.lineTo(400,230);
c.stroke();

c.beginPath();
c.moveTo(400,230);
c.lineTo(390,200);
c.stroke();

c.beginPath();
c.arc(409.5,195, 20, 0.9*Math.PI, 1.5*Math.PI);
c.stroke();

c.beginPath();
c.moveTo(440,230);
c.lineTo(440,194);
c.stroke();

c.beginPath();
c.arc(420,194,20,1.6*Math.PI,0*Math.PI);
c.stroke();

c.beginPath();
c.moveTo(409,175);
c.lineTo(426,175);
c.stroke();

c.beginPath();
c.arc(113,238,10,0*Math.PI,2*Math.PI);
//ctx.strokeStyle='black';
c.fillStyle = 'black';
c.fill();

c.beginPath();
c.arc(790,238,15,0*Math.PI,2*Math.PI);
c.strokeStyle='#3AAD55';
c.fillStyle='#3AAD55';
c.stroke();


}
};

var ball11 = { //alle anfangskoordinaten und eigenschaften
  x: 120,
  y: 235,
  vx: 5,
  vy: 1,
  radius: 10,
  color: 'black',
  draw: function() {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    c.closePath();
    c.fillStyle = this.color;
    c.fill();
  }
};

function clear() { //löschen 
  c.fillStyle = 'rgba(255, 255, 255, 1)';
  c.fillRect(0,0,mycanvas11.width,mycanvas11.height); // da ist ein fehler
}
function draw() { //animieren
  clear();
  ball11.draw();
  container11.draw();
  
  raf11 = window.requestAnimationFrame(draw);
  
  if(blue11 == true){ 
	ball11.x += 5;
	console.log("koordinate x = "+ball11.x+" koordinate y = "+ball11.y);
	if(ball11.x > 790){ 
		running11 = false;
		window.cancelAnimationFrame(raf11);
		
		console.log("Ende");
	}
  }
  if(red11 == true){ 
	if(redSwitch11 == false){
		ball11.x += 4;
		ball11.y += 1;
		console.log("koordinate x = "+ball11.x+" koordinate y = "+ball11.y);
	}
	if(ball11.x > 420 && ball11.y > 306){ //x 255 ,, y 310
		redSwitch11 = true;
		console.log("Route wechseln");
	}
	/*if(ball11.x > 790 && ball11.y < 230){
		running11 = false;
		window.cancelAnimationFrame(raf11);
		console.log("Ende");
	}*/
	if(redSwitch11 == true){
		ball11.y -= 0.95;
		ball11.x += 4.6;
		console.log("koordinate x = "+ball11.x+" koordinate y = "+ball11.y);
		
		if(ball11.x > 790 && ball11.y < 238){
			running11 = false;
			window.cancelAnimationFrame(raf11);
			console.log("Ende");
		}
		
	}
  }
  
}
$( "#blue11" ).on('click', function(e) { //blue
  if (!running11) {
    raf11 = window.requestAnimationFrame(draw);
    running11 = true;
	blue11 = true;
  }
});
$( "#red11" ).on('click', function(e) { //red
  if (!running11) {
    raf11 = window.requestAnimationFrame(draw);
    running11 = true;
	red11 = true;
  }
});
$( "#reset11" ).on('click', function(e) { //reset
		raf11 = window.requestAnimationFrame(draw);
		running11 = true;
		ball11.x = 120;
		ball11.y = 235;
		clear();
		ball11.draw();
		container11.draw();
		
    window.cancelAnimationFrame(raf11);
	running11 = false;
	console.log("resettet");
	
});

container11.draw();
ball11.draw();

}
function canvas12(){
	var c= document.getElementById("mycanvas12");

var ctx=c.getContext("2d");
/*ctx.beginPath();
ctx.arc(50,200,20,0*Math.PI,2*Math.PI);
ctx.strokeStyle='black';

ctx.stroke();

ctx.beginPath();
ctx.arc(930,200,20,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.stroke();

ctx.beginPath();
ctx.moveTo(300,0);
ctx.lineTo(600,200);
ctx.stroke();
*/
/*ctx.beginPath();
ctx.moveTo(50,150);
ctx.lineTo(650,150);
ctx.stroke();

ctx.beginPath();

ctx.arc(783, 218, 150, 1.15*Math.PI, 0.85*Math.PI, false);
ctx.stroke();
*/
ctx.beginPath();
ctx.moveTo(50,170);
ctx.lineTo(325,175);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(325,175);
ctx.lineTo(650,170);
ctx.stroke();

ctx.beginPath();
ctx.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
ctx.stroke();

ctx. beginPath();
ctx.moveTo(50, 306);
ctx.lineTo(325, 300);
ctx.stroke();

ctx. beginPath();
ctx.moveTo(325, 300);
ctx.lineTo(650, 306);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(50, 170);
ctx.lineTo(50, 306);
ctx.stroke();

ctx.beginPath();
ctx.arc(113,238,10,0*Math.PI,2*Math.PI);
//ctx.strokeStyle='black';
ctx.fillStyle = 'white';
ctx.fill();

// Start
ctx.beginPath();
ctx.moveTo(50,200);
ctx.lineTo(150,200);
ctx.lineTo(150,270);
ctx.lineTo(50,270);
ctx.strokeStyle="black";
ctx.stroke();

ctx.beginPath();
ctx.arc(790,238,15,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.fillStyle='#3AAD55';
ctx.stroke();

}

function canvas13(){
	var c= document.getElementById("mycanvas13");

var ctx=c.getContext("2d");
/*ctx.beginPath();
ctx.arc(50,200,20,0*Math.PI,2*Math.PI);
ctx.strokeStyle='black';

ctx.stroke();

ctx.beginPath();
ctx.arc(930,200,20,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.stroke();

ctx.beginPath();
ctx.moveTo(300,0);
ctx.lineTo(600,200);
ctx.stroke();
*/
/*ctx.beginPath();
ctx.moveTo(50,150);
ctx.lineTo(650,150);
ctx.stroke();

ctx.beginPath();

ctx.arc(783, 218, 150, 1.15*Math.PI, 0.85*Math.PI, false);
ctx.stroke();
*/
ctx.beginPath();
ctx.moveTo(50,170);
ctx.lineTo(650,170);
ctx.stroke();

ctx.beginPath();
ctx.arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);
ctx.stroke();

ctx. beginPath();
ctx.moveTo(50, 306);
ctx.lineTo(650, 306);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(50, 170);
ctx.lineTo(50, 306);
ctx.stroke();

ctx.beginPath();
ctx.arc(113,238,10,0*Math.PI,2*Math.PI);
//ctx.strokeStyle='black';
ctx.fillStyle = 'white';
ctx.fill();

// Start
ctx.beginPath();
ctx.moveTo(50,200);
ctx.lineTo(150,200);
ctx.lineTo(150,270);
ctx.lineTo(50,270);
ctx.strokeStyle="black";
ctx.stroke();

ctx.beginPath();
ctx.arc(790,238,15,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.fillStyle='#3AAD55';
ctx.stroke();

ctx.beginPath();
ctx.moveTo(300,250);
ctx.lineTo(450,250);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(300,220);
ctx.lineTo(450,220);
ctx.stroke();




}
