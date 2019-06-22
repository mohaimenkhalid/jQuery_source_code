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

			details();
		});

		function details(){
			$.ajax({

				url:"test.xml",
				dataType:"xml",
				success: function(data){
					$("ul").children().remove(); //remove all from ul 
					$(data).find("person").each(function(){
						var alldata = '<li>Name: '+$(this).find("name").text()+'</li><li>from: '+$(this).find("from").text()+'</li>';
					$("ul").append(alldata);
					});
				},

				error: function(){
					$("ul").append("Error");
				}

			});
		}


	</script>

	<hr>
	jQuery : XML with jQuery AJAX Method
	<hr>
	
	<hr>



	<div class="para">

		<ul></ul>	
	</div>

</body>
</html>