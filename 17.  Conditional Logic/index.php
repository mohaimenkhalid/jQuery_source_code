<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto; }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px; background-color:#ddd;}

		.bg{ background-color: #999; color: white; }
		.dimen{background-color: #ddd; text-align: center; width: 360px; margin: 30px; padding: 50px; border: 40px solid #999; font-size: 36px;}
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<script>
		
		$(document).ready(function(){

			$("#submitbtn").click(function(e){

				var isvalid = true;
				$("input[type= 'text']#required").each(function(){
					if (($(this).val()) == '' ) {
						isvalid = false;
						$(this).css({
							"border" : "1px solid red",
							"background" : "#fefcec"
						});
					}

				if (isvalid == false) {
					e.preventDefault();
				}
			});
		});

		});


	</script>

	<hr>
	Conditional Logic
	<hr>
	form validation
	<hr>



	<div class="para">

		<form id="myform" style="margin-top: 20px; margin-bottom: 10px; margin-left: 20px;" method="post">
			<center><h3>Registration Form</h3></center>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text"  id="" ></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text"  id="required"></td>
				</tr>

				<tr>
					<td>password</td>
					<td><input type="text" id="required"></td>
				</tr>
				<tr>
					<td></td>
					<td><button id="submitbtn">Submit</button></td>
				</tr>
			</table>
		</form>

		
	</div>

</body>
</html>