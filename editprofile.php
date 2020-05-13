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
  .button {
  background-color: white; /* Green */
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  display: inline-block;
  cursor: pointer;
  border-radius: 2rem;
  margin-top: 10px;
  }

  .green {background-color: #4CAF50;} /* green */
  .green:hover{
    color: #4CAF50;
    background-color: white;
    font-style: oblique;
    border: 2px solid #4CAF50;
  }
  .errorMsg{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f44336;
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
			<td><a href="profile.php"><img src="pic/back.png" width="40px" height="40px"></a></td>
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
  				<input id="mypic" type="file" name="mypic" value="">
  			</td>
  		</tr>



  		<tr>
  			<td>Chef Name</td>
  			<td>:</td>
  			<!-- use chef name by session -->
  			<td><input id="cname" type="text" name="cname" onkeyup="validation()"></td>
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
          <input id="cemail" type="text" name="cemail" value="">
        </td>
      </tr>

      <tr>
        <td>Address</td>
        <td>:</td>
        <td>
          <input id="cadd" type="text" name="cadd" value="">
        </td>
      </tr>

      <tr>
        <td>Phone_no</td>
        <td>:</td>
        <td>
          <input id="cphn" type="number" name="cphn" >
        </td>
      </tr>

      <tr>
        <td>DOB</td>
        <td>:</td>
        <td>
          <input id="cdob" type="date" name="cdob" value="">
        </td>
      </tr>


  		<tr>
  			<td colspan="3" align="center"><input class="green button" type="button"  value="Done" onclick="editprofileValidation()"></td>
  		</tr>

  	</table>
  </form>

  <script charset="utf-8">

  function editprofileValidation(){
    var name = document.getElementById("cname").value;
    var pass = document.getElementById("cpass").value;
    var email = document.getElementById("cemail").value;
    var phn = document.getElementById("cphn").value;
    var dob = document.getElementById("cdob").value;
    var add = document.getElementById("cadd").value;
    var mypic = document.getElementById("mypic").value;

    var msgDiv = document.querySelector(".msg");
    var msgDivclass = document.querySelector(".msg").classList;
        if (name=="" || pass =="" || email =="" || phn =="" || dob =="" || add =="" || !mypic) {
            msgDivclass.add("errorMsg");
            msgDiv.innerHTML="<h3>Empty fields</h3>";

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
