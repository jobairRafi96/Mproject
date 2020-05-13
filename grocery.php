<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('servies/functions.php');
  $result = grocery();
  $Serial=0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grocery</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Grocery list</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

	<table align="center">
		<tr>
			<td><input type="text" name="item" value="" placeholder="search" size="40"></td>
			<td><a href="grocery.php"><img src="pic/search.png" alt="search" width="40px" height="40px"></a></td>
		</tr>
	</table>

	<table width="50%" align="center">
		<tr><td width="10%"><h2>Serial</h2></td>
			<td width="20%"><h2 align="center">Grocery Item Name</h2></td>
			<td width="10%"><h2 align="center">Quantity</h2></td>
		</tr>

<?php	while($row = mysqli_fetch_assoc($result)){ ?>
    <?php $GLOBALS['Serial']++;?>

		<tr><td width="10%"><?= $GLOBALS['Serial'] ?></td>
			<td width="20%" align="center"><?=$row['grocery_name']  ?></td>
			<td width="10%" align="center"><?=$row['ava_quantity']  ?>KG</td>
		</tr>
<?php } ?>
	</table>
	<hr>
	<hr>
	<br>

	<table align="center">
		<tr>
			<td colspan="2"><a href="ordergrocery.php"><img src="pic/grocery.png" width="80px" height="80px" alt="grocery pic"></a></td>
			<td><a href="ordergrocery.php"><input type="submit" name="submit" value="Order Grocery"></a></td>
		</tr>
	</table>


</body>
</html>
