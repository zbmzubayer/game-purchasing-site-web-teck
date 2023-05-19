window.addEventListener('load', (event) =>
{
 $requestData = 'data';
 
 let xhttp = new XMLHttpRequest();
 xhttp.open('POST', '../../viewprofile.php', true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send('data='+$requestData);
 
 xhttp.onreadystatechange = function()
 {
  if(this.readyState == 4 && this.status == 200)
  {
   let obj = JSON.parse(this.responseText);
   document.getElementById("fullname").value = obj.fullname;
   document.getElementById("username").value = obj.username;
   document.getElementById("email").value = obj.email;
   document.getElementById("password").value = obj.password;
   document.getElementById("confirmpassword").value = obj.confirmpassword;
   document.getElementById("dateofbirth").value = obj.dateofbirth;
  }
 }
});