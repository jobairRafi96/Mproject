<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}
  require_once('../servies/functions.php');
  // form data
  $groceryName = $_POST['name'];
  $reqQuantity = $_POST['quantity'];
  $cid=$_SESSION['chefpi']['chef_id'];
  $groid="";

  // TODO: check data may be changable..
  $avQuantity =0;
  $checked=1;

        if (empty($groceryName)||empty($reqQuantity)) {
          echo("<h1 align='center'>empty submittion</h1>");
        }else{

              $result=grocery();
              while($row = mysqli_fetch_assoc($result)) {
                if ($row['grocery_name']==$groceryName) {
                  $groid=$row['grocery_orderid'];
                  break;
                }
              }

              if ($groid=="") {
                  $groceryOrderDone= groceryNewOrder($groceryName,$avQuantity,$reqQuantity,$checked,$cid);
                  if ($groceryOrderDone) {
                    header("location: ../grocery.php");
                  }else{
                    echo "error";
                  }
              }else{
                    $groceryOrderDone=groceryOrderExist($groceryName,$reqQuantity,$checked,$groid);
                        if ($groceryOrderDone) {
                          header("location: ../grocery.php");
                        }else{
                          echo "error";
                    }
              }

        }

?>
