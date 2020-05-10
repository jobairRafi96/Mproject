

function editprofileValidation(){
  let pass = document.getElementById("cpass").value;

  if (pass.length<5) {
    alert("password must be 5 charecter");
    return false;
  } else {
    document.getElementById("editprofileValidation").submit();
  }
}
