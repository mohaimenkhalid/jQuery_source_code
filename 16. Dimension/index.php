<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; }

		.bg{ background-color: #999; color: white; }
		.dimen{background-color: #ddd; text-align: center; width: 360px; margin: 30px; padding: 50px; border: 40px solid #999; font-size: 36px;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#select").click(function(){
				
				var val = "";
				val +="width is: "+ $(".dimen").width()+"<br>";
				val +="height is: "+ $(".dimen").height()+"<br>";
				val +="Inner Width is: "+ $(".dimen").innerWidth()+"<br>";
				val +="Inner height is: "+ $(".dimen").innerHeight()+"<br>";
				val +="Inner Width is: "+ $(".dimen").outerWidth()+"<br>";
				val +="Inner height is: "+ $(".dimen").outerHeight()+"<br>";

				$("#state").html(val);
			});


		});


	</script>

	<hr>
	Dimension width(), height(), innerheight(), innerWidth(), outerWidth(), outerHeight()
	<hr>
	css()
	<hr>

	<button id="select">Select</button>

	<div id="state"></div>

	<div class="para">

		<p  class="dimen">we are learning jQuery.</p>
	</div>

</body>
</html>