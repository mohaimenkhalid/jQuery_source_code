<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd; min-height: 300px;}

		.bg{ background-color: #999; color: white; }
		.dimen{background-color: #ddd; text-align: center; width: 360px; margin: 30px; padding: 50px; border: 40px solid #999; font-size: 36px;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			var personJSON = [ {
				"name" : "khalid",
				"skill" : "php"
			},
			{
				"name" : "masud",
				"skill" : "css"
			}

			];

			
			$("#state").html('Name:'+personJSON[0].name);
			
		});

	</script>

	<hr>
	jQuery :  jQuery with JSON
	<hr>
	



<div class="para">
	<div id="state"></div>



</div>



</body>
</html>