<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  $mid = $_GET['Id'];
  $iname = $_GET['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT item</title>
</head>

<style media="screen">
    body{
      margin: 0;
      padding:0;
      box-sizing: border-box;
    }

    .button {
    background-color: white; /* Green */
    border: none;
    color: white;
    padding: 10px 28px;
    text-align: center;
    display: inline-block;
    cursor: pointer;
    border-radius: 2rem;
    }

    .green {background-color: #4CAF50;} /* green */
    .green:hover{
      color: #4CAF50;
      background-color: white;
      font-style: oblique;
      border: 2px solid #4CAF50;
    }
    .black {background-color: #000000;} /* grey */
    .black:hover{
      color: #000000;
      background-color: white;
      font-style: oblique;
      border: 2px solid #000000;
    }

    .eform{
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 200px;
    }
</style>

<body>

  <div class="eform">

            <fieldset style="width: 350px">
          		<form method="post" action="php/itemEdit.php?name=<?=$iname?>&Id=<?=$mid?>"><h3>
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
          					<td align="center"><input class="green button" type="submit" name="Confirm" value="Confirm"></td>
          					<tr></tr>
          					<td align="center"><a href="menudetails.php?Id=<?=$mid?>"><input class="black button" type="button" name="Back" value="Back"></a></td>
          					</tr>

          			</table>

          		</form>

          </fieldset>


  </div>



</body>
</html>
