<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
  require_once('../servies/functions.php');
  // session data from database
  $un = $_POST['cname'];
  $pass = $_POST['cpass'];
  $em = $_POST['cemail'];
  $add = $_POST['cadd'];
  $dob = $_POST['cdob'];
  $phn = $_POST['cphn'];
  $id=$_SESSION['chefpi']['chef_id'];
  $uid=$_SESSION['chefpi']['user_id'];

//profile pic
      $filename = $_FILES['mypic']['name'];
  		$dest = "../upload/".$filename;
  		$src = $_FILES['mypic']['tmp_name'];

  		if(move_uploaded_file($src, $dest)){
  			$_SESSION['pic'] = $filename;
  		}else{
  			echo "Error";
  		}

      $pp1= $dest;

  $result = editPI($pp1,$un,$em,$add,$dob,$phn,$id);

  if ($result) {

  editPassword($uid,$pass);
  header("location: ../profile.php");
    // $_SESSION['uname'] = $un;
  }else{
    echo "error";
  }
?>
