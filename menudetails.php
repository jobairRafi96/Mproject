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
	<title>menudetails</title>
</head>
<body>
		<table align="center">
		<tr>
			<td><a href="menu.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Menu Details</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	<table width="80%" align="center">
		<tr>
			<td align="center"><h2>Serial</h2></td>
			<td align="center"><h2>Item Name</h2></td>
			<td align="center"><h2>Item price</h2></td>
			<td><h2 align="center">Delete</h2></td>
			<td></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td align="center">01</td>
			<td align="center">Item Name</td>
			<td align="center">Item price</td>
			<td width="10%" align="center"><a href="menudetails.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td><a href="edititem.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

		<tr>
			<td colspan="5"></td>
		</tr>
		

		<tr>
			<td colspan="5" align="center"><a href="additem.php"><input type="submit" name="submit" value="ADD Item"></a></td>
		</tr>
		
</body>
</html>
