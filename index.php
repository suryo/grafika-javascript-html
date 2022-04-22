<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table width=100% border=1 height=100%>
<tr>
<td align="center">
<canvas  id="myCanvas" width=800 height="400" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>
</td>
</tr>
</table>
<button onclick="myVar = setTimeout(titiknolnol, 1000)">titikordinat(0,0)</button>
<button onclick="myVar = setTimeout(titikpusat, 1000)">titikpusattengah</button>
<button onclick="myVar = setTimeout(line, 1000)">garis</button>
<button onclick="myVar = setTimeout(linehor, 1000)">line horizontal kartesian</button>
<button onclick="myVar = setTimeout(linemodif, 1000)">garis koordinat kartesian</button>
<p id="demo"></p>

<form id="frm1" action="/action_page.php">
  x : <input type="text" name="fname" id="xawal" placeholder="Masukkan Angka x" value=50>
  y : <input type="text" name="lname" id="yawal" placeholder="Masukkan Angka y" value=50>
  <br>
</form>

<script>
function titiknolnol()
{
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var imgData=ctx.createImageData(1,1);
for (var i=0;i<imgData.data.length;i+=4)
  {
  imgData.data[i+0]=255;
  imgData.data[i+1]=0;
  imgData.data[i+2]=0;
  imgData.data[i+3]=255;
  }
  //di dahului dengan x baru y
ctx.putImageData(imgData,0,0);	
}

function titikpusat()
{

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var width = (c.scrollWidth)/2;
var height = (c.scrollHeight)/2;
var imgData=ctx.createImageData(1,1);
for (var i=0;i<imgData.data.length;i+=4)
  {
  imgData.data[i+0]=255;
  imgData.data[i+1]=0;
  imgData.data[i+2]=255;
  imgData.data[i+3]=255;
  }
ctx.putImageData(imgData,width,height);
}

function linehor()
{
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var width = (c.scrollWidth)/2;
var height = (c.scrollHeight)/2;
var imgData=ctx.createImageData(1,1);
for (var i=0;i<imgData.data.length;i+=4)
  {
  imgData.data[i+0]=255;
  imgData.data[i+1]=0;
  imgData.data[i+2]=255;
  imgData.data[i+3]=255;
  }
for (var a=0;a<c.scrollWidth;a+=1)
  {
  ctx.putImageData(imgData,a,height);
  }

for (var b=0;b<c.scrollHeight;b+=1)
{
ctx.putImageData(imgData,width,b);
}

}

function line()
{
    
var canvas = document.getElementById('myCanvas');
if (canvas.getContext) 
 {
  var context = canvas.getContext('2d');
  context.beginPath(); 
   context.moveTo(10,45);
  context.lineTo(180,60);
  context.stroke();
   }

}


function linemodif()
{

var canvas = document.getElementById('myCanvas');
var width = (canvas.scrollWidth)/2;
var height = (canvas.scrollHeight)/2;
console.log("ini isi dari width = "+width);
console.log("ini isi dari height = "+height);
if (canvas.getContext) 
 {
  var context = canvas.getContext('2d');
  context.beginPath(); 
  //mendefinisikan titik awal dari garis di mulai dari koordinat berapa
  context.moveTo(width+25,height-25);
  //mendefinisikan titik akhir dari garis sampai koordinat berapa
  context.lineTo(width+100,height-50);
  context.stroke();
   }

}

</script>

</body>
</html>