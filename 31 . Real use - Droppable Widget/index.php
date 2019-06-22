<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto;  }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px;background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); padding: 10px; min-height: 300px; padding-top:20px; }
		
		#draggable { width: 150px; height: 150px; padding: 0.5em; border:1px solid #ddd; }

		.box{ background-color: #eee; border:1px solid; display: inline-table; font-size: 18px; padding: 5px; }
		.hover{	border:2px solid green; background-color: #fff; }
		li{font-size:18px;}
	</style>

<link rel="stylesheet" href="js/jquery-ui.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</head>
<body>

	<hr>
	Real use of jQuery - Droppable Widget
	<hr>

	<div class="para">

		<div class="box">
			PHP & JAVA technology<hr>
			<ul id="techlist">
				<li data-value="php">Codeignetor</li>
				<li data-value="php">Laravel</li>
				<li data-value="php">Cakephp</li>
				

				<li data-value="java">Spring</li>
				<li data-value="java">kohana</li>
			</ul>
		</div>
		<div class="box" id="phpframework">
			PHP Framework<hr>
			<ul id="php"></ul>
		</div>
		<div class="box" id="javaframework">
			java Framework<hr/>
			<ul id="java"></ul>
		</div>
		
	
	</div>

</body>
</html>