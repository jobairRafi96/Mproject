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
	function chefpiTomng($mid){

    $con = getConnection();
    $sql = "select * from managerpi where manager_id='{$mid}'";
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
	function editPIname($value,$cid){
		$con = getConnection();
		$sql = "update chefpi set  name = '{$value}' where chef_id='{$cid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function editPIemail($value,$cid){
		$con = getConnection();
		$sql = "update chefpi set  email = '{$value}' where chef_id='{$cid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function editPIadd($value,$cid){
		$con = getConnection();
		$sql = "update chefpi set  address = '{$value}' where chef_id='{$cid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function editPIphone($value,$cid){
		$con = getConnection();
		$sql = "update chefpi set  phone_no = '{$value}' where chef_id='{$cid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function editPIdob($value,$cid){
		$con = getConnection();
		$sql = "update chefpi set  dob = '{$value}' where chef_id='{$cid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}


	function editPassword($uid,$pass,$em){
		$con = getConnection();
		$sql = "update user set password = '{$pass}', email ='{$em}' where user_id='{$uid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
function	editPasswordsingle($value,$uid){
	$con = getConnection();
	$sql = "update user set password = '{$value}' where user_id='{$uid}'";
	$result = mysqli_query($con, $sql);

	return $result;
}
		function editPIpic($pp1,$cid){
			$con = getConnection();
			$sql = "update chefpi set profile_pic = '{$pp1}' where chef_id='{$cid}'";
			$result = mysqli_query($con, $sql);

			return $result;
		}

	function getAllorder(){
		$con = getConnection();
		$sql = "select * from orderlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAllorder1($sid){
		$con = getConnection();
		$sql = "select * from orderlist where serial_id='{$sid}'";
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

	function itemDlt($iname){
		$con = getConnection();
		$sql = "delete from item where item_name='{$iname}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}

	function itemEdit($itemName,$itemPrice,$iname){
		$con = getConnection();
    $sql = "update item set item_name = '{$itemName}', price='{$itemPrice}' where item_name='{$iname}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}

	function itemAdd($itemName,$itemQuantity,$itemPrice,$mid){
		$con = getConnection();
    $sql = "insert into item values('','{$itemName}','{$itemQuantity}','{$itemPrice}', '{$mid}')";
    $result = mysqli_query($con, $sql);

    return $result;
	}

	function getAllitem(){
		$con = getConnection();
		$sql = "select * from item";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function updateQuantityItem($newItemQuantity,$itemId){
		$con = getConnection();
    $sql = "update item set quantity = '{$newItemQuantity}' where item_id='{$itemId}'";
    $result = mysqli_query($con, $sql);

    return $result;
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

	function orderDlt($sid){
		$con = getConnection();
    $sql = "delete from orderlist where serial_id='{$sid}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}

	function getAllDailyOrder(){
		$con = getConnection();
		$sql = "select * from dailyorderlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function menu($menuName){
		$con = getConnection();
		$sql = "select * from menu where menu_name='{$menuName}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

    return $user;
	}

	function grocery(){
		$con = getConnection();
		$sql = "select * from grocery";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function grocerySearch($search){
		$con = getConnection();
		$sql = "select * from grocery where grocery_name like '%{$search}%'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function groceryOrderExist($groceryName,$reqQuantity,$checked,$groid){
		$con = getConnection();
    $sql = "update grocery set grocery_name = '{$groceryName}',req_quantity = '{$reqQuantity}', checked ='{$checked}' where grocery_orderid='{$groid}'";
    $result = mysqli_query($con, $sql);

		return $result;
	}

	function groceryNewOrder($groceryName,$avQuantity,$reqQuantity,$checked,$cid){
		$con = getConnection();
		$sql = "insert into grocery values('','{$groceryName}','{$avQuantity}','{$reqQuantity}', '{$checked}', '{$cid}')";
    $result = mysqli_query($con, $sql);

		return $result;
	}

	function review(){
		$con = getConnection();
		$sql = "select * from review";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function service($serviceName,$reqBy){
		$con = getConnection();
		$sql = "insert into service values('','{$serviceName}','{$reqBy}','{0}')";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function serviceCheck($uid){
		$con = getConnection();
		$sql = "select * from service where reqby_user='{$uid}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
	function updateBalanceT($newBalance,$chefid){
		$con = getConnection();
    $sql = "update chefpi set tip_amount = '{$newBalance}' where chef_id='{$chefid}'";
    $result = mysqli_query($con, $sql);

    return $result;
	}




?>
