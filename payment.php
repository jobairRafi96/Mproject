
<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}

?>

<!DOCTYPE html>
<html>
<title> Withdraw Payment</title>
<body>
	<center>
	<fieldset style="width: 350px">
		<form><h3>
			<table align="center">
				<tr>
					<td align="center" colspan="2"><h3> Withdraw <br>Payment</h3></td>			
				</tr>

				<tr>
					<td>Account Name: </td>
					<tr></tr>
					<td><input type="text" name="user name"  placeholder="user name"></td>
				    <tr></tr>
					<td>Current Balance: </td>
					<tr></tr>
					<td><input type="number" name="card number"  placeholder="number"></td>
                    <tr></tr>
					<td>withdrawal Date: </td>
					<tr></tr>
					<td><input type="Date" name="Expire Date" ></td>
					<tr></tr>
					<td>Amount: </td>
					<tr></tr>
					<td><input type="number" name="card number"  placeholder="number"></td>
                    <tr></tr>
					<tr></tr>
					<td align="center"><a href="chef.php"><input type="button" name="Confirm" value="Proceed"></a></td>
					</tr>
	
			</table>
				
		</form>
		
	

</fieldset>
</center>
</body>
</html>