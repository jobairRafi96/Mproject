<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
// TODO: login is not done
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('servies/functions.php');
  //chef id will be found with login check;
  $chefId = 2;
  $result = chefpi($chefId);
  $_SESSION['chefpi']=$result;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Profile</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

<fieldset>
	<legend>Profile</legend>
	<table align="center">

		<tr>
			<td>Profile Pic</td>
			<td>:</td>
			<td>
        <?php if ($_SESSION['chefpi']['profile_pic']==""){ ?>
          <img src="pic/p.png" width="50px" height="50px" alt="profile pic" align="center">
          <?php } else{ ?>
				<img src="upload/<?=$_SESSION['pic']?>" width="50px" height="50px" alt="profile pic" align="center">
        <?php } ?>
			</td>
		</tr>



		<tr>
			<td>Chef Name</td>
			<td>:</td>
			<!-- use chef name by session -->
			<td><?php echo $_SESSION['chefpi']['name']; ?></td>
		</tr>



		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<?php echo $_SESSION['chefpi']['email']; ?>
			</td>
		</tr>

    <tr>
      <td>DOB</td>
      <td>:</td>
      <td>
        <?php echo $_SESSION['chefpi']['dob']; ?>
      </td>
    </tr>

    <tr>
      <td>address</td>
      <td>:</td>
      <td>
        <?php echo $_SESSION['chefpi']['address'] ?>
      </td>
    </tr>

    <tr>
      <td>Phone</td>
      <td>:</td>
      <td>
        <?php // TODO: in database phone_no should be string ?>
        <?php echo $_SESSION['chefpi']['phone_no'] ?>
      </td>
    </tr>

    <tr>
      <td>Work Under</td>
      <td>:</td>
      <td>
      <?php // TODO: under_mgrid should be a name ?>
        <?php echo $_SESSION['chefpi']['under_mgrid']; ?>
      </td>
    </tr>


		<tr>
			<td>Tip Amount</td>
			<td>:</td>
      <?php // TODO: calculationg tip amount ?>
			<td><?php echo $_SESSION['chefpi']['tip_amount']; ?></td>
		</tr>



		<tr>
			<td colspan="3" align="right"><a href="editprofile.php"><input type="submit" name="submit" value="Edit"></a></td>
		</tr>

	</table>

</body>
</html>
