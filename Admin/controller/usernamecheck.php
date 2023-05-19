<?php

$connect = mysqli_connect("localhost", "root", "", "webtech");

if (!empty($_POST["username"]))
{
 $query = "SELECT * FROM users WHERE username = '".$_POST["username"]."'";
 $result = mysqli_query($connect, $query);
 $count = mysqli_num_rows($result);
 if ($count > 0)
 {
  echo "User Name already taken";
  echo "<script>$('#submit').prop('disabled'),true);</script>";
 }
 else
 {}
}

?>