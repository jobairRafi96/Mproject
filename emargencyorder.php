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
	<title>Make emergency order</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="order.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1> Make Emergency Order</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

<fieldset>
	<legend>Emergency</legend>
	<table align="center">

		<tr>
			<td>Hotel Name</td>
			<td>:</td>
			<td>
				<select>
				<option>Hotel 1</option>
				<option>Hotel 2</option>
				<option>Hotel 3</option>
				</select>
			</td>
		</tr>

			<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>

		<tr>
			<td>Chef Name</td>
			<td>:</td>
			<!-- use chef name by session -->
			<td><?php echo $_SESSION['uname']; ?></td>
		</tr>


		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td>Item Name</td>
			<td>:</td>
			<td>
				<select>
				<option>tanduri</option>
				<option>masala roast</option>
				<option>chicken soup</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>

		<tr>
			<td>Quantity</td>
			<td>:</td>
			<td><input type="number" name="quantity"></td>
		</tr>

		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>

		<tr>
			<td colspan="3" align="right"><a href="emargency.php"><input type="submit" name="submit" value="submit"></a></td>
		</tr>

	</table>
</fieldset>

</body>
</html>