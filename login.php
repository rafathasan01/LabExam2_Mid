<?php

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$pass = $_POST['pass'];
	if ($name=='admin' AND $pass=='admin') {
		$_SESSION['auth']=md5($name.$pass);
		 header('location:dashboard.php');
	}
	else
	{
		header('location:login.php');
	}
}


?>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
<table border="1" width="50%" height="50%">
	<tr>
		<td align="left"><a>X Company</a></td>
		<td align="right"><a href="home.html">Home</a> | <a href="login.php">Login</a> | <a href="regis.html">Registration</a></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
				<fieldset style="width:200;">
					<legend><h3>LOGIN</h3></legend>
					<form method="POST" action="">
						<table border="0">
							<tr>
								<td>
									Username: <input type="text" name="username"><br><br>
									Password: <input type="password" name="pass">
								</td>
							</tr>
							<tr>
								<td>
									<hr>
									<input type="checkbox" name="remem"> Remender me
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit"> &nbsp; <a href="forget.php">Forget Password?</a>
								</td>
							</tr>
						</table>
					</form>
				</fieldset><br>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">Copyright &copy; 2019</td>
	</tr>
</table>
</center>
</body>
</html>

