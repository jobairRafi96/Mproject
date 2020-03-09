<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
</head>
<body>
	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Service</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>


	<table align="center">
		<tr>
			<td colspan="2"></td>
			<td ><a href="Service.php"><img src="pic/service.png" width="100px" height="100px"></a></td>
			<td><input type="checkbox" name="service" value="room"></td>
			<td align="left"><a href="service.php"><input type="submit" name="submit" value="Room Service"></a></td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="7"></td>
		</tr>
		<tr>
			<td colspan="7"></td>
		</tr>
		<tr>
			<td colspan="7"></td>
		</tr>
		<tr>
			<td colspan="7"></td>
		</tr>
		<tr>
			<td colspan="7"></td>
		</tr>

	
		<tr>
			<td colspan="2"></td>
			<td ><a href="Service.php"><img src="pic/service.png" width="100px" height="100px"></a></td>
			<td><input type="checkbox" name="service" value="room"></td>
			<td align="left"><a href="service.php"><input type="submit" name="submit" value="Table Service"></a></td>
			<td colspan="2"></td>
		</tr>

		<tr>
			<td colspan="2"></td>
			<td ><a href="service.php"><img src="pic/service.png" width="100px" height="100px"></a></td>
			<td><input type="checkbox" name="service" value="room"></td>
			<td align="left"><a href="service.php"><input type="submit" name="submit" value="Call service Boy"></a></td>
			<td colspan="2"></td>
		</tr>

		<tr>
			<td colspan="2"></td>
			<td ><a href="Service.php"><img src="pic/service.png" width="100px" height="100px"></a></td>
			<td><input type="checkbox" name="service" value="room"></td>
			<td align="left"><a href="service.php"><input type="submit" name="submit" value="Extra Hand"></a></td>
			<td colspan="2"></td>
		</tr>
	</table>

</body>
</html>