<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  $mid=$_GET['Id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add item</title>
</head>

<style media="screen">
body{
  margin: 0;
  padding:0;
  box-sizing: border-box;
}

.aform{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 200px;
}
</style>
<body>
  <div class="aform">
          <fieldset style="width: 350px">
            <form method="post" action="php/addingItem.php?Id=<?=$mid?>"><h3>
              <table align="center">
                <tr>
                  <td align="center" colspan="2"><h3>ADD ITEM</h3></td>
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
                  <td>Item Quantity</td>
                  <tr></tr>
                  <td><input type="number" name="quantity"  placeholder="quantity"></td>
                    <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <td align="center"><input type="submit" name="Confirm" value="Confirm"></td>
                  <tr></tr>
                  <td align="center"><a href="menudetails.php?Id=<?=$mid?>"><input type="button" name="Back" value="Back"></a></td>
                  </tr>

              </table>

            </form>



        </fieldset>
  </div>




</body>
</html>
