var c= document.getElementById("mycanvas");

var ctx=c.getContext("2d");
ctx.beginPath();
ctx.arc(10,75,5,0*Math.PI,2*Math.PI);
ctx.strokeStyle='black';
ctx.stroke();
ctx.beginPath();
ctx.arc(280,75,5,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.stroke();

