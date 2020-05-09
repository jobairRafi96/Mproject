<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('../servies/functions.php');
  // session data from database
  $un = $_POST['cname'];
  $id=$_SESSION['chefpi']['chef_id'];

  $result = editPI($un,$id);

  if ($result) {
    echo "edit done";
    // $_SESSION['uname'] = $un;
  }else{
    echo "error";
  }
?>
