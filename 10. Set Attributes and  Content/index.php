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

			$("#name").click(function(){

				$("#getname").val("Khalid")
			});

			$("#dept").click(function(){

				$("#getdept").html("CSE")
			});

			$("#skill").click(function(){

				$("#getskill").text("Programming")
			});
		});

	</script>

	<hr>
	SET Content and Attributes
	<hr>
	 text(), html(), val()
	<hr>

	<button id="name">Show Name</button>
	<button id="dept">Show Department</button>
	<button id="skill">Show skill</button>
	
	<div class="para">
		<p id="line">We are learning <strong>jQuery</strong></p>
		
		Name: <input type="text" placeholder="Name will show here" id="getname"><br>
		Dept : <span id="getdept"></span> <br>
		Skill : <span id="getskill"></span>
	</div>

</body>
</html>