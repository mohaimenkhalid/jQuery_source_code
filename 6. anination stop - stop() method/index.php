<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{height: 210px; width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; padding: 5px; position: relative;}
		.inside{position: absolute; height: 150px; width: 150px; background: green; color: white; padding: 5px;  border-radius: 50%;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#start").click(function(){
				$(".inside").animate({

					left: '400px',
					opacity: '0.4',
					height : '200px',
					width : '200px',
				} ,2000 );
			});

			$("#stop").click(function(){

				$(".inside").stop();
			});
		
		});

	</script>

	<hr>
	Introduction
	<hr>
	 animate() , stop() method
	<hr>

	<button id="start">Start Animation</button>
	<button id="stop">stop Animation</button>
	
	
	<div class="para">
		<div class="inside">
			
			
		</div>
		
		
	</div>

</body>
</html>