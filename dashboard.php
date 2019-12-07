<?php
session_start();
if(isset($_SESSION['auth']))
{


?>

<html>
<head>
	<title>Home</title>
</head>
<body>
<center>
<table border="1" width="50%" height="50%">
	<tr>
		<td align="left"><a>X Company</a></td>
		<td align="right"> Login as <a href="profile.php">User</a><a href="logout.php">| Logout</a> </td>
	</tr>
	<tr>
		<td width="20px">
			<p>Account</p>
			<hr>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changepic.php">Change Profile Picture</a></li>
				<li><a href="changepass.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
				
				
			</ul>
		</td>
		<td><h3>Welcome </h3></td>
	</tr>
	<tr>
		<td colspan="2" align="center">Copyright &copy; 2019</td>
	</tr>
</table>
</center>
</body>
</html>


<?php

}
else
{
	header('locattion:login.php');
}

?>