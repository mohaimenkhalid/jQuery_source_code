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
	Real use of jQuery -Range Slider Values
	<hr>

	<div class="para">

	Amount:<span id="state"></span><br>
	<div id="slider"></div>

	Maximum Amount: <input type="text" id="minvalue" readonly style="font-weight: bold; color: green; margin-bottom: 20px;" /><br>
	Minimum Amount: <input type="text" id="maxvalue" readonly style="font-weight: bold; color: green; margin-bottom: 20px;" />

	
		
		
	</div>

</body>
</html>