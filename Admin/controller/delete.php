<?php

session_start();
require_once("../model/adminModel.php");
if(isset($_POST['submit']))
{
 $status = deleteUser($_SESSION["serialno"]);
 if($status)
 {
  echo "Profile successfully deleted";
 }
 else
 {
  echo "Unsuccessful";
 }
}

?>