<?php

	require('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from user where email='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function usertype($username){

		$con = getConnection();
		$sql = "select type from users where username='{$username}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

  function getAllInfo(){
    $con = getConnection();
    $sql = "select * from chefpi";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
  }

	function chefpi($id){

    $con = getConnection();
    $sql = "select * from chefpi where user_id='{$id}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    return $user;
  }

	function loginValidate($uname, $password){

		$con = getConnection();
		$sql = "select * from user where email='{$uname}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function editPI($filename,$un,$em,$add,$dob,$phn,$id){

		$con = getConnection();
		$sql = "update chefpi set profile_pic = '{$filename}', name = '{$un}', email ='{$em}', address ='{$add}', dob ='{$dob}', phone_no ='{$phn}'  where chef_id='{$id}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function editPassword($uid,$pass){
		$con = getConnection();
		$sql = "update user set password = '{$pass}' where user_id='{$uid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}




?>
