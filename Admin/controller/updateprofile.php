<?php

require_once('../model/adminModel.php');
session_start();
if (isset($_POST['submit']))
{
  $fullname = $_POST["fullname"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $dateofbirth = $_POST["dateofbirth"];
  
  if ($fullname != "" && $username != "" && $email != "" && $password != "" && $confirmpassword != "" && $dateofbirth != "" && $password == $confirmpassword)
  {
   $user = ['serialno' => $_SESSION['serialno'], 'fullname' => $fullname, 'username' => $username, 'email' => $email, 'password' => $password, 'confirmpassword' => $confirmpassword, 'dateofbirth' => $dateofbirth];
   $status = updateUser($user);
   if ($status)
   {
    echo "Updated successfully";
   }
   else
   {
    echo "Try again...";
   }
  }
}

?>