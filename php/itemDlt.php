<?php

 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}
  require_once('../servies/functions.php');

  $iname = $_GET['name'];
  $id=$_GET['Id'];


  $doneResult = itemDlt($iname);


  if($doneResult){
      header("location: ../menudetails.php?Id={$id}");
  }
  else{
    header("location: ../menudetails.php?Id={$id}&Pending='order is pending'");
  }
 ?>
