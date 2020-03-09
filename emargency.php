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
	<title>Emargency order</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="order.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Emergency Order</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>


	<fieldset style="">
	<table align="center">
		<tr>
			<td align="right"><a href="emargencyorder.php"><img src="pic/emergency.png" width="100px" height="100px"></a></td>
			<td><a href="emargencyorder.php"><h2> Make An Emergency Order</h2></a></td>
		</tr>
		<tr>
			<td><a href="emargencylist.php"><h2>Emergency Order list</h2></a></td>
			<td><a href="emargencylist.php"><img src="pic/emergency.png" width="100px" height="100px"></a></td>
		</tr>
	</table>

</body>
</html>