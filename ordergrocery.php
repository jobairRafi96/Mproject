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
	<title>Add item</title>
</head>
<body>
	<center>
	<fieldset style="width: 350px">
		<form><h3>
			<table align="center">
				<tr>
					<td align="center" colspan="2"><h3>Order Grocery<br> ITEM</h3></td>			
				</tr>

				<tr>
					<td> Grocery Item name</td>
					<tr></tr>
					<td><input type="text" name="name"  placeholder="name"></td>
				    <tr></tr>
					<td>Item Quantity: </td>
					<tr></tr>
					<td><input type="number" name="quantity"  placeholder="quantity"></td>
                    <tr></tr>
					<tr></tr>
					<td align="center"><a href="grocery.php"><input type="button" name="Confirm" value="Confirm"></a></td>
					<tr></tr>
					<td align="center"><a href="grocery.php"><input type="button" name="Confirm" value="Back"></a></td>

					</tr>
	
			</table>
				
		</form>
		
	

</fieldset>
</center>

</body>
</html>