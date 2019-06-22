<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{height: 210px; width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; padding: 5px; position: relative;}
		.inside{position: absolute; height: 150px; width: 150px; background: red; color: white; padding: 5px;  border-radius: 50%;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#show").click(function(){

				alert("The text is: "+$("#line").text())
			});

			$("#source").click(function(){

				alert("The text is: "+$("#line").html())
			});

			$("#textval").click(function(){

				alert("The text is: "+$("#val").val())
			});
		});

	</script>

	<hr>
	Get Content and Attributes
	<hr>
	 text(), html(), val()
	<hr>

	<button id="show">Show text</button>
	<button id="source">Show html</button>
	<button id="textval">Show Value</button>
	
	<div class="para">
		<p id="line">We are learning <strong>jQuery</strong></p>
		
		Name: <input type="text" id="val">
	</div>

</body>
</html>