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