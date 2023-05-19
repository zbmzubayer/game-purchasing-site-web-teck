<?php

require_once("db.php");
function addUser($user)
{
 $connection = getConnection();
 $sql = "insert into users values('','{$user['username']}','{$user['password']}', '{$user['email']}')";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

function validate($username, $password)
{
 $connection = getConnection();
 $sql = "select * from users where username='{$username}' and password='{$password}'";
 $result = mysqli_query($connection, $sql);
 $data = mysqli_fetch_assoc($result);
 if($data != null)
 {
  return $data;
 }
 else
 {
  return false;
 }
}

function updateUser($user)
{
 $connection = getConnection();
 $sql = "update users set  username = '{$user['username']}', password = '{$user['password']}', email = '{$user['email']}'";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}
?>