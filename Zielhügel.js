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