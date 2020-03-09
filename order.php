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
	<title>Order LIst</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Order list</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	
<table width="100%">
		<tr><td width="10%"><h2>Serial</h2></td>
			<td width="20%"><h2>Guest Name</h2></td>
			<td width="20%" colspan="2"><h2 align="center">Item name</h2></td>
			<td width="10%"><h2 align="center">Quantity</h2></td>
			<td width="10%"><h2 align="center">Price</h2></td>
			<td width="10%"><h2>Complement</h2></td>
			<td width="10%"><h2 align="center">Cancel</h2></td>
			<td width="10%"><h2 align="center">Done</h2></td>
		</tr>
		
		<tr><td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">02</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">03</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">04</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">05</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">06</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">07</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">08</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr><td width="10%">09</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><input type="checkbox" name="complement" value=""></td>
			<td width="10%" align="center"><a href="order.php"><img src="pic/cancel.png" width="30px" height="30px"></a>
				</td>
			<td width="10%" align="center"><a href="order.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

		<!-- Daily order list -->
	<table align="center">
		<tr>
			<td><a href="dailyorder.php"><img src="pic/daily.png" width="80px" height="80px"></a></td>
			<td><a href="dailyorder.php"><h2>Daily Ordered item</h2></a></td>
			<td><a href="emargency.php"><img src="pic/emergency.png" width="80px" height="80px"></a></td>
			<td><a href="emargency.php"><h2>Emergency Order</h2></a></td>
		</tr>

	</table>

<!-- cancel nad done with button -->


</body>
</html>

