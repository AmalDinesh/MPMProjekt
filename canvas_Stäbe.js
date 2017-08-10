var canvas = document.getElementById("staebe");
var c = canvas.getContext("2d");

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

