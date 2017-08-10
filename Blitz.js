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
