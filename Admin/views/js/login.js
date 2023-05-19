function LogInValidation()
{
 let username = document.getElementById("username").value;
 let password = document.getElementById("password").value;
 
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
 else
 {
  return true;
 }
}

/*
function ajax()
{
 let username = document.getElementById('username').value;
 //let password = document.getElementById('password').value;
 //alert(username);
 let xhttp = new XMLHttpRequest();
 xhttp.open('POST', 'LogInCheck.php', true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send();
 xhttp.onreadystatechange = function(){
  if(this.readyState == 4 && this.readyState == 200)
  {
   alert(this.responseText);
  }
 }
}
*/