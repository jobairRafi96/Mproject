<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../../index.html");
 	}
  require_once('../../service/functions.php');
  // session data from database
  $itemName = $_POST['name'];
  $itemPrice = $_POST['price'];
  $mid=$_GET['Id'];
  $iname=$_GET['name'];

  if (empty($itemName)||empty($itemPrice)) {
    echo("<h1 align='center' background='red'>empty submittion</h1>");
  }else {

    $editDone=itemEdit($itemName,$itemPrice,$iname);
      if ($editDone) {
        header("location: ../../views/chef/menudetails.php?Id={$mid}");
      }else{
        echo "error";
      }

  }


?>
