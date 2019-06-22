<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto;  }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px;background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); padding: 10px; min-height: 300px; padding-top:20px; }
		#slider{margin-bottom: 20px; margin-top: 20px;}
	</style>

<link rel="stylesheet" href="js/jquery-ui.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</head>
<body>

	<hr>
	Real use of jQuery - Control Dimension with Multiple Sliders 
	<hr>

	<div class="para">
		Height:<br><br>
		<div id="imgheight"></div><br>
		Width:<br><br>
		<div id="imgwidth"></div><br>

		Opacity:<br><br>
		<div id="imgopacity"></div><br>

		<div id="state"></div><br>

	
		<center><img id="liveimg" src="img/1.png" style="height:150px; width: 150px; "></center>
	
		
		
	</div>

</body>
</html>