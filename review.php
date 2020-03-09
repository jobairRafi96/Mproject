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
	<title>Review</title>
</head>
<body>
	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>ReviewS</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	<table width="50%" align="center">
		<tr><td width="10%"><h2>Guest name</h2></td>
			<td width="20%"><h2 align="center">Review</h2></td>
			<td width="10%"><h2 align="center">Rating</h2></td>
		</tr>

		<tr>
			<td>Mohammad Rafi</td>
			<td>best chicken tanduri i have ever had and the service was also awesome</td>
			<td align="center">
				<select>
					<option>5 Star</option>
					<option>4 Star</option>
					<option>3 Star</option>
					<option>2 Star</option>
					<option>1 Star</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Mohammad Rafi</td>
			<td>best chicken tanduri i have ever had and the service was also awesome</td>
			<td align="center">
				<select>
					<option>5 Star</option>
					<option>4 Star</option>
					<option>3 Star</option>
					<option>2 Star</option>
					<option>1 Star</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Mohammad Rafi</td>
			<td>best chicken tanduri i have ever had and the service was also awesome</td>
			<td align="center">
				<select>
					<option>5 Star</option>
					<option>4 Star</option>
					<option>3 Star</option>
					<option>2 Star</option>
					<option>1 Star</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Mohammad Rafi</td>
			<td>best chicken tanduri i have ever had and the service was also awesome</td>
			<td align="center">
				<select>
					<option>5 Star</option>
					<option>4 Star</option>
					<option>3 Star</option>
					<option>2 Star</option>
					<option>1 Star</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Mohammad Rafi</td>
			<td>best chicken tanduri i have ever had and the service was also awesome</td>
			<td align="center">
				<select>
					<option>5 Star</option>
					<option>4 Star</option>
					<option>3 Star</option>
					<option>2 Star</option>
					<option>1 Star</option>
				</select>
			</td>
		</tr>
	</table>

</body>
</html>