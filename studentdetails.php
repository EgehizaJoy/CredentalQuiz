<?php
use Phppot\students;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/students.php';
    $students = new students();
    $logResult = $students->loginstudents();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								name<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="name"
								id="name">
						</div>
					</div>


	                   <div class="row">
						<div class="inline-block">
							<div class="form-label">
								email<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="email"
								id="email">
						</div>
					</div>


                    	<div class="row">
						<div class="inline-block">
							<div class="form-label">
								phoneno<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="phoneno"
								id="phoneno">
						</div>
					</div>


						<div class="row">
						<div class="inline-block">
							<div class="form-label">
								gender<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="gender"
								id="gender">
						</div>
					</div>




						<div class="row">
						<div class="inline-block">
							<div class="form-label">
								age<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="age"
								id="age">
						</div>
					</div>



						<div class="row">
						<div class="inline-block">
							<div class="form-label">
								studentimage<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="studentimage"
								id="studentimage">
						</div>
					</div>


						<div class="row">
						<div class="inline-block">
							<div class="form-label">
								reg_date<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="reg_date"
								id="reg_date">
						</div>
					</div>

					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>












   