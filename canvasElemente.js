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
var redSwitch1 = false;
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
	ctx.arc(790,238,15,0*Math.PI,2*Math.PI);
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
  radius: 20,
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
	if(ball.x > 255 && ball.y > 310){ //x 255 ,, y 310
		redSwitch = true;
		console.log("Route wechseln");
	}
	if(ball.x > 650 && ball.y < 280){
			redSwitch = true;
		}
	if(ball.x > 750 && ball.y < 245){
		running = false;
		window.cancelAnimationFrame(raf);
		console.log("Ende");
	}
	if(redSwitch == true){
		ball.y -= 4.8;
		ball.x += 5;
		console.log("koordinate x = "+ball.x+" koordinate y = "+ball.y);
		if(ball.x > 410 && ball.y < 169){
			redSwitch = false;
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
mycanvas.addEventListener('mouseout', function(e) { //wenn kursor draussen ist, terminiert sich das programm
  window.cancelAnimationFrame(raf);
  running = false;
});
container.draw();
ball.draw();
}
//BAHNWINKEL
function bahnwinkel(){
	//Variabeln
	var canvas = document.getElementById("Bahnwinkel");
	var c = canvas.getContext("2d");

	//Zeichnen
	c.beginPath();
	c.moveTo(250,170);
	c.lineTo(650,170);
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
	c.arc(790, 238, 10, 0*Math.PI, 2*Math.PI, false);
	c.strokeStyle="#3AAD55";
	c.fillStyle="#3AAD55";
	c.stroke();
}
//CANVASSTÄBE
function canvas4(){
	var canvas = document.getElementById('mycanvas4');
	var c = canvas.getContext("2d");

	var raf;
var running = false;
var red = false;
var blue = false;
var redSwitch = false;
var redSwitch1 = false;

var container = {
  draw: function(){
	//Bahn
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
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
	c.arc(790, 238, 10, 0*Math.PI, 2*Math.PI, false);
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
	c.stroke();

}
}
//CANVAS2
function canvas2(){
	//Canvas/Contextvarabeln
	var canvas = document.getElementById("canvas2");
	var c = canvas.getContext("2d");

	//Canvas für Map2
	c.beginPath();
	c.moveTo(50,170);
	c.lineTo(650,170);
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

	//Hindernisse
	//1
	c.save();
	c.rotate(30*Math.PI/180);
	c.fillStyle="yellow";
	c.fillRect(430, 10, 60, 60);
	c.restore();

	//2
	c.rotate(20*Math.PI/180);
	c.fillStyle="blue";
	c.fillRect(650, -35, 60, 60);

}
//CANVAS3
function canvas3(){
	var c2=document.getElementById("mycanvas3");
	var cty=c2.getContext("2d");
	/*
	cty.beginPath();
	cty.arc(790,238,15,0*Math.PI,2*Math.PI);
	cty.strokeStyle='#3AAD55';
	cty.fillStyle='#3AAD55';
	cty.stroke();
	*/
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
	cty.beginPath();
	cty.arc(113,220,10,0*Math.PI,2*Math.PI);
	//ctx.strokeStyle='black';
	cty.fillStyle = 'white';
	cty.fill();

}
//MITTELHÜGEL
function mittelhuegel(){
	var canvas = document.getElementById("Mittelhuegel");
	var c = canvas.getContext("2d");

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
	c.arc(850, 220, 10, 0*Math.PI, 2*Math.PI, false);
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
//PLATEAU
function plateau(){
	var canvas = document.getElementById("Plateau");
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

	//Plateau
	c.beginPath();
	c.arc(770, 238, 40, 1.25*Math.PI, 0.75*Math.PI);
	c.stroke();

	c.beginPath();
	c.arc(770, 238, 80, 1.25*Math.PI, 0.75*Math.PI);
	c.stroke();

	//1
	c.beginPath();
	c.moveTo(713, 180);
	c.lineTo(742, 210);
	c.stroke();

	c.beginPath();
	c.moveTo(742, 210);
	c.lineTo(550, 210);
	c.stroke();

	c.beginPath();
	c.moveTo(713, 180);
	c.lineTo(550, 210);
	c.stroke();

	c.beginPath();
	c.moveTo(550, 210);
	c.lineTo(550, 170);
	c.stroke();

	//2
	c.beginPath();
	c.moveTo(713, 295);
	c.lineTo(742, 265);
	c.stroke();

	c.beginPath();
	c.moveTo(713, 295);
	c.lineTo(550, 265);
	c.stroke();

	c.beginPath();
	c.moveTo(742, 265);
	c.lineTo(550, 265);
	c.stroke();

	c.beginPath();
	c.moveTo(550, 265);
	c.lineTo(550, 306);
	c.stroke();

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
function vulkan(){
	var canvas = document.getElementById("Vulkan");
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
function zielhuegel(){
	var canvas = document.getElementById("Zielhügel");
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
function blitz(){
	var canvas = document.getElementById("Blitz");
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

ct5.beginPath();
ct5.moveTo(50,170);
ct5.lineTo(650,170);
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
ct5.arc(113,238,10,0*Math.PI,2*Math.PI);
ct5.fillStyle='white';
ct5.fill();

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
ct5.rotate(2*Math.PI/180);
ct5.stroke();

}

function canvas