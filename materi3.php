<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <table width=100% border=1 height=100%>
    <tr>
      <td align="center">
        <canvas id="myCanvas" width=800 height="400" style="border:1px solid #d3d3d3;">
          Your browser does not support the HTML5 canvas tag.</canvas>
      </td>
    </tr>
  </table>
  <button onclick="myVar = setTimeout(titiknolnol, 1000)">titikordinat(0,0)</button>
  <button onclick="myVar = setTimeout(titikpusat, 1000)">titikpusattengah</button>
  <button onclick="myVar = setTimeout(line, 1000)">garis</button>
  <button onclick="myVar = setTimeout(linehor, 1000)">line horizontal kartesian</button>
  <button onclick="myVar = setTimeout(persegi, 1000)">buat persegi</button>
  <button onclick="myVar = setTimeout(geserkanan, 1000)">geser kanan</button>
  <button onclick="myVar = setTimeout(geserkiri, 1000)">geser kiri</button>
  <button onclick="myVar = setTimeout(geseratas, 1000)">geser atas</button>
  <button onclick="myVar = setTimeout(geserbawah, 1000)">geser bawah</button>
  <button onclick="myVar = setTimeout(rotate, 1000)">rotate</button>
  <button onclick="myVar = setTimeout(rotate2, 1000)">rotate2</button>
  <p id="demo"></p>

  <form id="frm1" action="/action_page.php">
    x : <input type="text" name="fname" id="xawal" placeholder="Masukkan Angka x" value=50>
    y : <input type="text" name="lname" id="yawal" placeholder="Masukkan Angka y" value=50>
    <br>
  </form>

  <script>
    //line();
    document.onkeydown = function (e) {
      switch (e.keyCode) {
        case 37:
          geserkiri();
          break;
        case 38:
          geseratas();
          break;
        case 39:
          geserkanan();
          break;
        case 40:
          geserbawah();
          break;
      }
    }
    var x = document.getElementById("frm1");
    var seconds = 0,
      minutes = 0,
      hours = 0,
      x1 = parseInt(x.elements[0].value),
      y1 = parseInt(x.elements[1].value),
      t;

    text =
      "x1 : " + x1 + "<br>" +
      "y1 : " + y1 + "<br>";
    document.getElementById("demo").innerHTML = text;



    function titiknolnol() 
    {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 255;
      }
      //di dahului dengan x baru y
      ctx.putImageData(imgData, 0, 0);
    }

    function titikpusat() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 255;
        imgData.data[i + 3] = 255;
      }
      ctx.putImageData(imgData, width + 100, height - 100);
    }

    function linehor() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 255;
        imgData.data[i + 3] = 255;
      }
      for (var a = 0; a < c.scrollWidth; a += 1) {
        ctx.putImageData(imgData, a, height);
      }

      for (var b = 0; b < c.scrollHeight; b += 1) {
        ctx.putImageData(imgData, width, b);
      }
    }

    function line() {
      var canvas = document.getElementById('myCanvas');
      if (canvas.getContext) {
        var context = canvas.getContext('2d');
        context.beginPath();
        context.moveTo(10, 45);
        context.lineTo(180, 47);
        context.stroke();
      }
    }


    function persegi() {
      linehor();
      var x = document.getElementById("frm1");
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var x = width + x1;
      var y = height - y1;

      var r = 100;
      var ax = x - r;
      var ay = y + r;
      var bx = x - r;
      var by = y - r;
      var cx = x + r;
      var cy = y - r;
      var dx = x + r;
      var dy = y + r;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 75;
      }
      ctx.putImageData(imgData, x, y);
      ctx.putImageData(imgData, ax, ay);
      ctx.putImageData(imgData, bx, by);
      ctx.putImageData(imgData, cx, cy);
      ctx.putImageData(imgData, dx, dy);
      for (var a = bx; a < cx; a += 1) {
        ctx.putImageData(imgData, a, by);
        ctx.putImageData(imgData, a, ay);
      }
      for (var b = by; b < ay; b += 1) {
        ctx.putImageData(imgData, ax, b);
        ctx.putImageData(imgData, cx, b);
      }

    }

    function geserkanan() {
      myVar = setTimeout(bersihkan, 50)
      x1++;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function geserkiri() {
      myVar = setTimeout(bersihkan, 50)
      x1--;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function geseratas() {
      myVar = setTimeout(bersihkan, 50)
      y1++;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function geserbawah() {
      myVar = setTimeout(bersihkan, 50)
      y1--;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function bersihkan() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.clearRect(0, 0, c.width, c.height);
      ctx.beginPath();
    }



    function rotate() {
      myVar = setTimeout(bersihkan, 50)
      rotate2d(Math.PI / 6, 0);
      //x1++;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>" +
        "r : " + Math.PI / 6 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function rotate2d2(anglex, angley) {


      var sin = Math.sin(anglex);
      var cos = Math.cos(angley);

      var x = x1;
      var y = y1;
      var r = 100;
      var ax
      var ay
      var bx
      var by
      var cx
      var cy
      var dx
      var dy
      //var z = node[2];

      ax = Math.round(x * cos - y * sin);
      ay = Math.round(y * sin + x * cos);

      bx = Math.round(x * cos - y * sin);
      by = Math.round(y * sin + x * cos);

      cx = Math.round(x * cos - y * sin);
      cy = Math.round(y * sin + x * cos);

      dx = Math.round(x * cos - y * sin);
      dy = Math.round(y * sin + x * cos);
    }


    function rotate2() {

      myVar = setTimeout(bersihkan, 50)
      rotate2d2(Math.PI / 6, 0);
      //x1++;
      t = setTimeout(persegi, 50);
      text =
        "x1 : " + ax + "<br>" +
        "y1 : " + ay + "<br>" +
        "r : " + Math.PI / 6 + "<br>";
      document.getElementById("demo").innerHTML = text;

    }

    function rotate2d(anglex, angley) {
      var sin = Math.sin(anglex);
      var cos = Math.cos(angley);
      var x = x1;
      var y = y1;
      x1 = Math.round(x * cos - y * sin);
      y1 = Math.round(y * sin + x * cos);

    }
  </script>

</body>

</html>