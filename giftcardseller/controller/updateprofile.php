<?php

require_once('../model/giftcardseller.php');
session_start();
if (isset($_POST['submit']))
{
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  
  
  if ($username != "" && $password != "" && $email != "" )
  {
   $user = ['username' => $username, 'password' => $password, 'email' => $email];
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