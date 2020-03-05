<?php
//SESSION NEEDS to be start in every page
	session_start();
//if submit button was clicked then storing the name/pass and doing the validation
	if (isset($_REQUEST['submit'])) {
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['pass'];
		$utype = $_REQUEST['utype'];

				if ( empty($utype) || empty(trim($uname)) || empty(trim($password)) ) {
					echo "Null submission";
				}

		
				elseif($utype == "chef") {
				


								  $fn = fopen("database.txt","r");
								  
								  while(! feof($fn))  {
									$result = fgets($fn);

									$data= explode('|', $result);

									

									if (trim($data[0]) == $uname && trim($data[1])== $password) {

											$_SESSION['uname'] = $uname;
											$_SESSION['pass'] = $password;

											header("location: chef.php");
										}
										
								  }
								  echo "invalid username and password";
						
								  }
			

					else{
						echo "Invalid User";
					}

		

		
	}
	else{
		echo "Invalid request..please login first";
		header("location: login.php");
	}
?>