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
	<title>Menu</title>
</head>
<body>

		<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>MENU</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>
	<br>
	<br><br><br>


	<table width="70%" align="center">
		<tr>
			<td align="center"><a href="menudetails.php"><img src="pic/brackfast.jpg" width="100px" height="200px"></a></td>
			<td align="center"><a href="menudetails.php"><img src="pic/lunch.jpg" width="100px" height="200px"></a></td>
			<td align="center"><a href="menudetails.php"><img src="pic/dinner.jpg" width="100px" height="200px"></a></td>
		</tr>
		<tr>
			<td><h2 align="center"><a href="menudetails.php">Breackfast</a></h2></td>
			<td><h2 align="center"><a href="menudetails.php">Lunch</a></h2></td>
			<td><h2 align="center"><a href="menudetails.php">Dinner</a></h2></td>
		</tr>

		<tr>
			<td align="center"><a href="menudetails.php"><img src="pic/appetizer.jpg" width="100px" height="200px"></a></td>
			<td align="center"><a href="menudetails.php"><img src="pic/drinks.jpg" width="100px" height="200px"></a></td>
			<td align="center"><a href="menudetails.php"><img src="pic/mainfood.jfif" width="100px" height="200px"></a></td>
		</tr>
		<tr>
			<td><h2 align="center"><a href="menudetails.php">Appetizer</a></h2></td>
			<td><h2 align="center"><a href="menudetails.php">Drinks</a></h2></td>
			<td><h2 align="center"><a href="menudetails.php">Mainfood</a></h2></td>
		</tr>

		<tr>
			<td align="center"><a href="menudetails.php"><img src="pic/snacks.jpg" width="100px" height="200px"></a></td>
			<td align="center"><a href="menudetails.php"><img src="pic/special.jpg" width="100px" height="200px"></a></td>
			<td align="center"></td>
		</tr>
		<tr>
			<td><h2 align="center"><a href="menudetails.php">Snacks</a></h2></td>
			<td><h2 align="center"><a href="menudetails.php">Special</a></h2></td>
			<td></td>
		</tr>
	</table>

</body>
</html>