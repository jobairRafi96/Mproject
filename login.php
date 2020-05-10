
<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="php/logincheck.php">

			<table align="center">
				<tr>
					<td colspan="3" align="center"><h1>Login</h1></td>
				</tr>

				<tr>
					<td colspan="3"></td>
				</tr>

				<tr>
					<td>User Name</td>
					<td>:</td>
					<td><input type="text" name="uname" value="" size="40" placeholder="Name/Email"></td>
				</tr>

				<tr>
					<td colspan="3"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="Password" name="pass" value="" size="40" placeholder="Password"></td>
				</tr>

				<tr>
					<td colspan="3"></td>
				</tr>


				<tr>
					<td colspan="3"></td>
				</tr>

				<tr>
					<td colspan="3" align="right"><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>

	</form>

</body>
</html>
