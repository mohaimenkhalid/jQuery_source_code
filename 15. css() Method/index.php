<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{height: 300px; width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; padding: 5px;}

		.bg{ background-color: #999; color: white; }
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#styleadd").click(function(){
				$("p").css({

					"background-color" : "#ccc",
					"padding" : "20px"

				});
			});


		});


	</script>

	<hr>
	css() Method 
	<hr>
	css()
	<hr>

	<button id="styleadd">Add style</button>

	<div class="para">

		<p >i love jQuery. we are learning jQuery.</p>
	</div>

</body>
</html>