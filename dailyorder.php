<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('servies/functions.php');
  //finding user id by $_SESSION['user']
  $result = getAllDailyOrder();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daily Order</title>
</head>
<body>
	<table align="center">
		<tr>
			<td><a href="order.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Daily Top Ordered List</h1></td>
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
			<td align="center"><h2>Item Quantity</h2></td>
		</tr>

    <?php	while($row = mysqli_fetch_assoc($result)){ ?>

		<tr>
			<td align="center"><?=$row['serial_id']?></td>

      <?php $itemName['item']=item($row['item_id']) ?>

			<td align="center"><?=$itemName['item']['item_name']?></td>
			<td align="center"><?=$row['quantity']?></td>
		</tr>

		<?php } ?>

<?php // TODO: delete dumy data ?>
		<tr>
			<td align="center">06</td>
			<td align="center">Shahi Tanduri</td>
			<td align="center">20</td>
		</tr>

		<tr>
			<td align="center">07</td>
			<td align="center">Shahi Tanduri</td>
			<td align="center">20</td>
		</tr>
	</table>



</body>
</html>
