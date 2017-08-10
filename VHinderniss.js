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