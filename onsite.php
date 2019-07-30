<?php
      session_start();
      $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
      $number = rand(1,58);
      $newstring = str_shuffle($string);
      $randomstring = substr($newstring,$number,5);
      $_SESSION["randomstring"] = $randomstring;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<canvas id="myCanvas" width="400" height="140" style="border:1px solid #d3d3d3;"></canvas>
	<div id="result"></div>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.fillStyle ="cornsilk";
ctx.fillRect(100, 20, 200, 100);
ctx.font = "25px Georgia";
ctx.fillStyle =" black";
ctx.fillText("<?php echo $randomstring; ?>", 180, 70);
</script>
<input type="text" id="submit" name="submit" oninput="check()">
<script type="text/javascript">
	function check() {
		var data = document.getElementById('submit').value;
		if(data=="<?php echo $_SESSION["randomstring"]; ?>"){
			document.getElementById('result').innerHTML='<p>Correct</p>';
		}       
		else{
			document.getElementById('result').innerHTML='<p>incorrect</p>';
		}
	}
</script>
</body>
</html>

