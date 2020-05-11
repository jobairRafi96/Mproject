<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<style media="screen">
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .errorMsg{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #d63447;
    color: white;
    font-family: fantasy;
    width: 100vh;
    height: 50px;
    font-size: 1rem;
    left: 380px;
    top: 400px;
  }
</style>
<body>

	<table align="center">
		<tr>
			<td><a href="chef.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td><h1>Profile</h1></td>
			<td><img src="pic/logo.png" alt="logo" width="50px" height="50px"></td>
			<td  align="right"><a href="chef.php"><img src="pic/home.png" width="50px" height="50px" align="center"></a></td>
		</tr>
	</table>
	<hr>
	<hr>

<fieldset>
	<legend>Profile</legend>
  <div class="msg">
<!-- <h3>at least 5 character for password</h3> -->
  </div>

  <form id="editprofileValidation" action="php/editcheck.php" method="post" enctype="multipart/form-data">
    <table align="center">

  		<tr>
  			<td>Profile Pic</td>
  			<td>:</td>
  			<td>
  				<input type="file" name="mypic" value="">
  			</td>
  		</tr>



  		<tr>
  			<td>Chef Name</td>
  			<td>:</td>
  			<!-- use chef name by session -->
  			<td><input type="text" name="cname" value=""></td>
  		</tr>



  		<tr>
  			<td>Password</td>
  			<td>:</td>
  			<td>
  				<input id="cpass" type="Password" name="cpass" value="">
  			</td>
  		</tr>

      <tr>
        <td>Email</td>
        <td>:</td>
        <td>
          <input type="text" name="cemail" value="">
        </td>
      </tr>

      <tr>
        <td>Address</td>
        <td>:</td>
        <td>
          <input type="text" name="cadd" value="">
        </td>
      </tr>

      <tr>
        <td>DOB</td>
        <td>:</td>
        <td>
          <input type="date" name="cdob" value="">
        </td>
      </tr>

      <tr>
        <td>Phone_no</td>
        <td>:</td>
        <td>
          <input type="number" name="cphn" value="">
        </td>
      </tr>

  		<tr>
  			<td colspan="3" align="right"><input type="button"  value="Done" onclick="editprofileValidation()"></td>
  		</tr>

  	</table>
  </form>

  <script charset="utf-8">

  function editprofileValidation(){
    var pass = document.getElementById("cpass").value;
    var msgDiv = document.querySelector(".msg");
    var msgDivclass = document.querySelector(".msg").classList;
        if (pass.length<5) {
            msgDivclass.add("errorMsg");
            msgDiv.innerHTML="<h3>password must contain at least 5 charecter</h3>";

                setTimeout(function(){
                  msgDivclass.remove("errorMsg");
                  msgDiv.innerHTML="";
                },2500);

            return false;
        } else {
            document.getElementById("editprofileValidation").submit();
        }
  }


  </script>


</body>
</html>
