<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}

 	echo "chef";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="login.php">logout</a>

</body>
</html>