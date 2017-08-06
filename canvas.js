var c= document.getElementById("mycanvas");

var ctx=c.getContext("2d");
ctx.beginPath();
ctx.arc(100,75,80,0*Math.PI,2*Math.PI);
ctx.strokeStyle='black';
ctx.stroke();

ctx.beginPath();
ctx.arc(280,75,80,0*Math.PI,2*Math.PI);
ctx.strokeStyle='#3AAD55';
ctx.stroke();

ctx.beginPath();
ctx.arc(50,30,50,0,Math.PI*2, false);
ctx.strokeStyle="blue";
ctx.stroke();

