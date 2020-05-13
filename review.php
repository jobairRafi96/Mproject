<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('servies/functions.php');

  $result = review();
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
                    <?php	while($row = mysqli_fetch_assoc($result)){ ?>
                      <?php $fr=(int)$row['review_food']; ?>
                      <?php if ($fr>0) {?>
                        <?php $result1=Guestpi($row['guest_id']) ?>
                        <tr><td width="10%" align="center"><?=$result1['name']?></td>
                    			<td width="20%" align="center"><?=$row['review_msg'] ?></td>
                    			<td width="10%" align="center"><?= $fr ?></td>
                    		</tr>
                    <?php }else{ ?>
                              <tr><td colspan="3" align="center">no reviews</td>
                              </tr>
                          <?php } ?>
                  <?php } ?>


	</table>

</body>
</html>
