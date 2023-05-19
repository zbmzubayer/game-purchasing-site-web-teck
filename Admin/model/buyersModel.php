<?php

require_once("db.php");
function validate($username, $password)
{
 $connection = getConnection();
 $sql = "select * from buyers where username='{$username}' and password='{$password}'";
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

function addUser($user)
{
 $connection = getConnection();
 $sql = "insert into buyers values('', '{$user['fullname']}', '{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['confirmpassword']}', '{$user['dateofbirth']}')";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

function updateUser($user)
{
 $connection = getConnection();
 $sql = "update buyers set fullname = '{$user['fullname']}', username = '{$user['username']}', email = '{$user['email']}', password = '{$user['password']}', confirmpassword = '{$user['confirmpassword']}', dateofbirth = '{$user['dateofbirth']}' where serialno = '{$user['serialno']}'";
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