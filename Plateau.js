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


