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

	function editPI($pp1,$un,$em,$add,$dob,$phn,$id){

		$con = getConnection();
		$sql = "update chefpi set profile_pic = '{$pp1}', name = '{$un}', email ='{$em}', address ='{$add}', dob ='{$dob}', phone_no ='{$phn}'  where chef_id='{$id}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function editPassword($uid,$pass,$em){
		$con = getConnection();
		$sql = "update user set password = '{$pass}', email ='{$em}' where user_id='{$uid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function getAllorder(){
		$con = getConnection();
		$sql = "select * from orderlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getAllorder1($sidAjex){
		$con = getConnection();
		$sql = "select * from orderlist where serial_id={$sidAjex}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

    return $user;
	}

	function Guestpi($gid){
		$con = getConnection();
    $sql = "select * from guestpi where guest_id='{$gid}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    return $user;
	}

	function item($iid){
		$con = getConnection();
    $sql = "select * from item where item_id='{$iid}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    return $user;
	}

	function orderCmp($sid){
		$comment = "complemented";
		$con = getConnection();
    $sql = "update orderlist set order_state = '{$comment}' where serial_id='{$sid}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}

	function orderDone($sid){
		$comment = "Done";
		$con = getConnection();
    $sql = "update orderlist set order_state = '{$comment}' where serial_id='{$sid}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}




?>
