<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{height: 300px; width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; padding: 5px;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#hide").click(function(){

				$(".para").hide();
			});

			$("#show").click(function(){

				$(".para").show();
			});

			$("#toggle").click(function(){

				$(".para").toggle('slow');
			});
		});

	</script>

	<hr>
	Introduction
	<hr>
	$(selector).action(), show(), hide(), toggle()
	<hr>

	<button id="hide">Hide</button>
	<button id="show">show</button>
	<button id="toggle">toggle</button>
	<div class="para">
		
		<p>i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.</p>
	</div>

</body>
</html>