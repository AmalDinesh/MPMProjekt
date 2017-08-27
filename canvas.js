


	


var c= document.getElementById("mycanvas");

var ctx=c.getContext("2d");

document.getElementById("blue1").onclick = animateBlue;
document.getElementById("red1").onclick = animateRed;
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


var x=113;
var y=238;
var dx=4;
var dx=4;
var radius=10;


function animateBlue(){
	
requestAnimationFrame(animateBlue);
ctx.clearRect(0,0,innerWidth,innerHeight);

ctx.beginPath();
ctx.arc(x,y,10,0*Math.PI,2*Math.PI);
//ctx.strokeStyle='black';
ctx.fillStyle = 'white';
ctx.fill();


     
	
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

function animateRed(){
	
	
	requestAnimationFrame(animateRed);
ctx.clearRect(0,0,innerWidth,innerHeight);

ctx.beginPath();
ctx.arc(x,y,10,0*Math.PI,2*Math.PI);
//ctx.strokeStyle='black';
ctx.fillStyle = 'white';
ctx.fill();


    if(x<270 && y<295 ){
		x=x+1;
		y=y+0.35;
	}
	
	else if(270<x<400 && y>180){
		x=x+1;
		y=y-1;
	}
	
	else if(x<600 && y<315){
		x=x+1;
		y=y+0.35;
	}
	
	
	
	
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
ctx.moveTo(129,235);
ctx.lineTo(270,305);
ctx.lineTo(400,170);
ctx.lineTo(600,305);
ctx.lineTo(770,235);
ctx.strokeStyle="red";
ctx.stroke();

}





 

