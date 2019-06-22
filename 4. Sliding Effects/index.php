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

			$("#slidedown").click(function(){
				$(".para").slideDown(1000);
			});

			$("#slideup").click(function(){
				$(".para").slideUp(1000);
			});

			$("#slidetoggle").click(function(){
				$(".para").slideToggle(1000);
			});

			
		});

	</script>

	<hr>
	Introduction
	<hr>
	 Slideing Effect - slideDown(), slideUp(), slideToggle()
	<hr>

	<button id="slidedown">Slide Down</button>
	<button id="slideup">Slide Up</button>
	<button id="slidetoggle">Slide Toggle</button>
	
	<div class="para">
		
		<p>i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.i love jQuery.</p>
	</div>

</body>
</html>