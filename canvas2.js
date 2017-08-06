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



