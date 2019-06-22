<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto;  }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px;background: linear-gradient(to right, #33ccff 0%, #ff99cc 95%);}

		.bg{ background-color: #999; color: white; }
		
		.error_form{ color: red; font-size: 14px; }
	</style>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>


	<hr>
	Real Use Form validation
	
	<hr>



	<div class="para">

		<form id="myform" action="msg.php" style="margin-top: 20px; margin-bottom: 10px; margin-left: 20px;" method="post">
			<center><h3> Form Validation</h3></center>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text"  id="username" required="1"></td>
					<td><span class="error_form" id="username_error_msg"></span></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text"  id="email" required="1"></td>
					<td><span class="error_form" id="email_error_msg"></span></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" id="password"></td>
					<td><span class="error_form" id="password_error_msg" required="1"></span></td>
				</tr>

				<tr>
					<td>Confirm Password</td>
					<td><input type="password" id="password_again"></td>
					<td><span class="error_form" id="password_again_error_msg" required="1"></span></td>
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