$(function(){

	$("username_error_msg").hide();
	$("email_error_msg").hide();
	$("password_error_msg").hide();
	$("password_again_error_msg").hide();

	var error_username = false;
	var error_email = false;
	var error_password = false;
	var error_again_password = false;

	$("#username").focusout(function(){
		check_username()
	});

	$("#email").focusout(function(){
		check_email()
	});

	$("#password").focusout(function(){
		check_password()
	});

	$("#password_again").focusout(function(){
		check_confirm_password()
	});


	function check_username(){
		var username_length = $("#username").val().length;

		if (username_length < 5 || username_length > 20) {
			$("#username_error_msg").html("*username should be between 5-20 character");
			$("#username_error_msg").show();
			error_username = true;
		}else{
			$("#username_error_msg").hide();
		}
	}


	function check_email(){
		var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
		var email = $("#email").val();
		if (pattern.test($("#email").val()) ) {
			$("#email_error_msg").hide();
			
		}else if(email == ""){
			$("#email_error_msg").html("*Email should not be Empty");
			$("#email_error_msg").show();

		}
		else{
			$("#email_error_msg").html("*Invalid Email address");
			$("#email_error_msg").show();
			email_error_msg = true;
			
		}
	}


	function check_password(){
		var password_length = $("#password").val().length;

		if (password_length < 6 ) {
			$("#password_error_msg").html("*password should be min 6 character");
			$("#password_error_msg").show();
			error_password = true;
		}else{
			$("#password_error_msg").hide();
		}
	}

	function check_confirm_password(){
		var password_value = $("#password").val();
		var password_confirm_value = $("#password_again").val();

		if (password_value != password_confirm_value ) {
			$("#password_again_error_msg").html("*password does not match");
			$("#password_again_error_msg").show();
			error_again_password = true;
		}else{
			$("#password_again_error_msg").hide();
		}
	}



	$("#myform").submit(function(){

		var error_username = false;
		var error_email = false;
		var error_password = false;
		var error_again_password = false;

		if (error_username == false && error_email == false && error_password == false && error_again_password == false) {
			return true;
		}else{
			return false;
		}

	});
});