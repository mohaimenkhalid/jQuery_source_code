<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{height: 300px; width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; padding: 5px; position: relative;}
		.inside{position: absolute; height: 150px; width: 150px; background: green; color: white; padding: 5px;  border-radius: 50%;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#slidedown").click(function(){
				$(".inside").animate({

					left: '400px',
					opacity: '0.4',
					height : '200px',
					width : '200px',
				} ,"slow" );
			});

			

			
		});

	</script>

	<hr>
	Introduction
	<hr>
	 animate() method
	<hr>

	<button id="slidedown">Start Animation</button>
	
	
	<div class="para">
		<div class="inside">
			
			
		</div>
		
		
	</div>

</body>
</html>