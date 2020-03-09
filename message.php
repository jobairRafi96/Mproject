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
	<title>Message</title>
</head>
<body>

	<table align="center">
		<tr>

			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Message</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	<center>
	<fieldset style="width: 350px">
		<form>
			<table align="center">
				<tr>
					<td align="center" colspan="3"><h3> Sent Message</h3></td>			
				</tr>
				<tr>
					<td colspan="2" align="center"> Receiver Type :</td>
					<td align="left">
						<select>
							<option>Chef</option>
							<option>Manager</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">Text:</td>
					<td><textarea rows = "5" cols = "20" name = "description">
            				
        				 </textarea></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><input type="submit" name="submit" value="Sent"></td>
				</tr>
			</table>
				
		</form>
		
	

</fieldset>
</center>


</body>
</html>