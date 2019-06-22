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

			$("#add").click(function(){

				$("p").append("Blust");
			});

		
			
		});

	</script>

	<hr>
	Add Elements
	<hr>
	 append(), prepend(), before(), after()
	<hr>

	<button id="add">Add Element</button>
	
	
	
	<div class="para">
		<p><a href="http://facebook.com" title="Facebook" id="facebook">Facebook</a></p>
		
		
	</div>

</body>
</html>