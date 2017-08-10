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

