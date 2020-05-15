<?php

 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: ../login.php");
 	}

  require_once('../servies/functions.php');
  $userId=$_SESSION['user']['user_id'];
  $reqAmount = $_POST['requestAmount'];

   $result = chefpi($userId);
   $chefid=$result['chef_id'];


  $tip['tip'] = (int)$result['tip_amount'];
  $reqAmount = (int)$reqAmount;
  $newBalance=$tip['tip']-$reqAmount;
if (empty($reqAmount)) {
  echo("<h1 align='center' background='red'>empty Filed</h1>");
}else {
  if ($newBalance>=0) {
    $balanceUpDone=updateBalanceT($newBalance,$chefid);
    if ($balanceUpDone) {
      header("location: ../chef.php");
    }else {
      echo"error";
    }
  }else{
      echo("<h1 align='center' background='red'>NOT ENOUGH BALANCE</h1>");
  }
}

?>
