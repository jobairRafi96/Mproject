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
	<title>EDIT item</title>
</head>
<body>
	<center>
	<fieldset style="width: 350px">
		<form><h3>
			<table align="center">
				<tr>
					<td align="center" colspan="2"><h3>EDIT ITEM</h3></td>			
				</tr>

				<tr>
					<td>Item name</td>
					<tr></tr>
					<td><input type="text" name="name"  placeholder="name"></td>
				    <tr></tr>
					<td>Item Price: </td>
					<tr></tr>
					<td><input type="number" name="price"  placeholder="price"></td>
                    <tr></tr>
					<tr></tr>
					<td align="center"><a href="menudetails.php"><input type="button" name="Confirm" value="Confirm"></a></td>
					<tr></tr>
					<td align="center"><a href="menudetails.php"><input type="button" name="Back" value="Back"></a></td>
					</tr>
	
			</table>
				
		</form>
		
	

</fieldset>
</center>

</body>
</html>