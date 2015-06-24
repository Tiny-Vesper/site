<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<!-- <?php echo validation_errors(); ?> -->

	<!-- <?php echo form_open('Login/register'); ?> -->

	<form action="<?php  echo site_url() ?>/Login/solveRigisterInfo" method="POST" >
		Username: <input type="text" name="username" /> <br/>
		Password: <input type="password" name="password" /> <br/>
		Confirm  &nbsp&nbsp&nbsp: <input type="password" name="con_password" /> <br/>
		<button type="submit">Register</button>
		<button type="reset"> Reset </button>
	</form>	
</body>
</html>