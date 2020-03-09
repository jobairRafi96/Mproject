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
	<title>Emergency list</title>
</head>
<body>


	<table align="center">
		<tr>
			<td><a href="emargency.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Emergency List</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	<table width="100%">
		<tr><td width="10%"><h2>Serial</h2></td>
			<td width="20%"><h2>Chef Name</h2></td>
			<td width="20%" colspan="2"><h2 align="center">Item name</h2></td>
			<td width="10%"><h2 align="center">Quantity</h2></td>
			<td width="10%"><h2 align="center">Price</h2></td>
			<td width="10%"><h2 align="center">Done</h2></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

		<tr>
			<td width="10%">01</td>
			<td width="20%">Mohammad Zafor Iqbal</td>
			<td width="20%" colspan="2" align="center">Pasta Basta</td>
			<td width="10%" align="center">3</td>
			<td width="10%" align="center">200tk</td>
			<td width="10%" align="center"><a href="emargencylist.php">
				<img src="pic/select.png" width="30px" height="30px"></a></td>
		</tr>

</body>
</html>