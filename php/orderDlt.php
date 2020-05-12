<?php

 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}
  require_once('../servies/functions.php');
  $sid=$_GET['Id'];


  $doneResult = orderDlt($sid);


  if($doneResult){
      header("location: ../order.php");
  }
  else{
    echo "error";
  }
 ?>
