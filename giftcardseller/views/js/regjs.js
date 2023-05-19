function SignUpValidation()
{
 
 let username = document.getElementById("username").value;
 let password = document.getElementById("password").value;
 let email = document.getElementById("email").value;
 
 
 
 
if (username.length < 3)
 {
  document.getElementById("username error").innerText = "User Name is too short";
  return false;
 }
 else if (!username.match(/^[A-Za-z.-]+$/))
 {
  document.getElementById("username error").innerText = "Invalid User Name";
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
 else
 {
  return true;
 }
}