<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<body>
	<div id="login_form">
		<form name="login_form" action="<?php echo site_url(); ?>/Login/solveLoginInfo" method="POST">
			Username: <input type="text" name="username" /> <br/>
			Password: <input type="password" name="password" /> <br/>
			<button type="submit" name="submit">submit</button>
			<button formaction="<?php echo site_url() ?>/Login/register">Register</button>
		</form>
	</div>
</body>
</html>