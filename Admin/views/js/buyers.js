function buyersValidation()
{
 let fullname = document.getElementById("fullname").value;
 let username = document.getElementById("username").value;
 let email = document.getElementById("email").value;
 let password = document.getElementById("password").value;
 let confirmpassword = document.getElementById("confirmpassword").value;
 let dateofbirth = document.getElementById("dateofbirth").value;
 if (fullname.length < 9)
 {
  document.getElementById("fullname error").innerText = "Full Name is too short";
  return false;
 }
 else if (!fullname.match(/^[a-zA-Z-'. ]+$/))
 {
  document.getElementById("fullname error").innerText = "Invalid Full Name";
  return false;
 }
 else if (username.length < 3)
 {
  document.getElementById("username error").innerText = "User Name is too short";
  return false;
 }
 else if (!username.match(/^[A-Za-z.-]+$/))
 {
  document.getElementById("username error").innerText = "Invalid User Name";
  return false;
 }
 else if (email == "")
 {
  document.getElementById("email error").innerText = "Email cannot be empty";
  return false;
 }
 else if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
 {
  document.getElementById("email error").innerText = "Invalid Email address";
  return false;
 }
 else if (password.length < 7)
 {
  document.getElementById("password error").innerText = "Password must be atleast 8 characters long";
  return false;
 }
 else if (!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}$/))
 {
  document.getElementById("password error").innerText = "Password must contain 1 number & 1 uppercase & 1 lowercase letter";
  return false;
 }
 else if (confirmpassword != password)
 {
  document.getElementById("confirmpassword error").innerText = "Password and Confirm Password doesn't match";
  return false;
 }
 else if (dateofbirth == "")
 {
  document.getElementById("dateofbirth error").innerText = "Field cannot remain empty";
  return false;
 }
 else
 {
  return true;
 }
}

function checkUserName()
{
 jQuery.ajax({
  url: "CheckUserName.php",
  data: 'username =' +$("#username").val(),
  type: "POST",
  success: function(data){
   check("#usernameerror").html(data);
  },
  error: function(){}
 })
}