<?php
//SESSION NEEDS to be start in every page
	session_start();

//if submit button was clicked then storing the name/pass and doing the validation
	if (isset($_REQUEST['submit'])) {
		$username = $_REQUEST['uname'];
		$password = $_REQUEST['pass'];

			include('../servies/functions.php');

				if ( empty(trim($username)) || empty(trim($password)) ) {
					echo "Null submission";
				}else{
					$user = validate($username, $password);

					if(count($user) > 0 ){
						$_SESSION['user'] = $user;
						$_SESSION['uname']=$username;

						header("location: ../chef.php");
					}else{
						echo "invalid username/password";
					}
				}

	}
	else{
		echo "Invalid request..please login first";
		// header("location: login.php");
	}
?>
