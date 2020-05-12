<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}
  require_once('../servies/functions.php');
  // session data from database
  $itemName = $_POST['name'];
  $itemPrice = $_POST['price'];
  $itemQuantity = $_POST['quantity'];
  $mid=$_GET['Id'];

  if (empty($itemName)||empty($itemPrice) || empty($itemQuantity)) {
    echo("<h1 align='center' background='red'>empty submittion</h1>");
  }else {
    $addDone=itemAdd($itemName,$itemQuantity,$itemPrice,$mid);
      if ($addDone) {
        header("location: ../menudetails.php?Id={$mid}");
      }else{
        echo "error";
      }

  }


?>
