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

			$("#remove").click(function(){

				$(".inside").remove(); //remove all element
			});

			$("#empty").click(function(){

				$(".inside").empty(); // just remove chaild element
			});

		
			
		});

	</script>

	<hr>
	Add Elements
	<hr>
	remove(), empty()
	<hr>

	<button id="remove">Remove Element</button>
	<button id="empty">Empty</button>
	
	
	
	<div class="para">
		<p ><a class="inside" href="http://facebook.com" title="Facebook" id="facebook">Facebook</a></p>
		
		
	</div>

</body>
</html>