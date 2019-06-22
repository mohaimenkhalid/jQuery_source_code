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

			$("#FadeIn").click(function(){
				$(".para").fadeIn('slow');
			});

			$("#FadeOut").click(function(){
				$(".para").fadeOut(1000);
			});

			$("#FadeTo").click(function(){
				$(".para").fadeTo(1000, .4);
			});

			$("#FadeToggle").click(function(){
				$(".para").fadeToggle('slow');
			});
		});

	</script>

	<hr>
	Introduction
	<hr>
	 fadeIn, fadeOut, fadeTo fadeToggle
	<hr>

	<button id="FadeIn">FadeIn</button>
	<button id="FadeOut">FadeOut</button>
	<button id="FadeTo">FadeTo</button>
	<button id="FadeToggle">FadeToggle</button>

	<div class="para">
		
		<p>i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.</p>
	</div>

</body>
</html>