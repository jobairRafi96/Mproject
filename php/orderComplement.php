<?php

 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}
  require_once('../servies/functions.php');
  $sid=$_POST['Id'];


  $complementResult = orderCmp($sid);



  if($complementResult){
      // header("location: ../order.php");
      echo "complemented";
  }
  else{
    echo "error";
  }
 ?>
