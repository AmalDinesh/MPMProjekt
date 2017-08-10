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
