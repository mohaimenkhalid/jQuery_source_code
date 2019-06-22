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

			$("#chain").click(function(){
				$(".para").css("background", "green").slideUp(3000).slideDown(3000);
			});
		});

	</script>

	<hr>
	Chaining
	<hr>
	 chining 
	<hr>

	<button id="chain">Click here</button>
	
	
	<div class="para">
		<div class="inside">
			
			
		</div>
		
		
	</div>

</body>
</html>